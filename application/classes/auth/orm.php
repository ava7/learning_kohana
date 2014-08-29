<?php

class Auth_Orm extends Auth
{
    protected function _login($user, $password, $remember)
    {
        if ( ! is_object($user))
        {
            $username = $user;
     
            // Load the user
            $user = ORM::factory('User');
            $user->where($user->unique_key($username), '=', $username)->find();
        }
     
        if (is_string($password))
        {
            // Create a hashed password
            $password = $this->hash($password);
        }
     
        // If the passwords match, perform a login
        if ($user->password === $password)
        {
            if ($remember === TRUE)
            {
                // Token data
                $data = array(
                    'user_id'    => $user->pk(),
                    'expires'    => time() + $this->_config['lifetime'],
                    'user_agent' => sha1(Request::$user_agent),
                );
     
                // Create a new autologin token
                $token = ORM::factory('User_Token')
                            ->values($data)
                            ->create();
     
                // Set the autologin cookie
                Cookie::set('authautologin', $token->token, $this->_config['lifetime']);
            }
     
            // Finish the login
            $this->complete_login($user);
     
            return TRUE;
        }
     
        // Login failed
        return FALSE;
    }

    public function login($username, $password, $remember = FALSE)
    {
        if (empty($password))
            return FALSE;
     
        return $this->_login($username, $password, $remember);
    }

 
   
    public function password($user)
    {
        if ( ! is_object($user))
        {
            $username = $user;
     
            // Load the user
            $user = ORM::factory('User');
            $user->where($user->unique_key($username), '=', $username)->find();
        }
     
        return $user->password;
    }
 
    
    public function check_password($password)
    {
        $user = $this->get_user();
     
        if ( ! $user)
            return FALSE;
     
        return ($this->hash($password) === $user->password);
    }
 
    
    public function logged_in($role = NULL)
    {
        // Get the user from the session
        $user = $this->get_user();
     
        if ( ! $user)
            return FALSE;
     
        if ($user instanceof Model_User AND $user->loaded())
        {
            // If we don't have a roll no further checking is needed
            if ( ! $role)
                return TRUE;
     
            if (is_array($role))
            {
                // Get all the roles
                $roles = ORM::factory('Role')
                            ->where('name', 'IN', $role)
                            ->find_all()
                            ->as_array(NULL, 'id');
     
                // Make sure all the roles are valid ones
                if (count($roles) !== count($role))
                    return FALSE;
            }
            else
            {
                if ( ! is_object($role))
                {
                    // Load the role
                    $roles = ORM::factory('Role', array('name' => $role));
     
                    if ( ! $roles->loaded())
                        return FALSE;
                }
                else
                {
                    $roles = $role;
                }
            }
     
            return $user->has('roles', $roles);
        }
    }
 
    
    public function get_user($default = NULL)
    {
        $user = parent::get_user($default);
     
        if ($user === $default)
        {
            // check for "remembered" login
            if (($user = $this->auto_login()) === FALSE)
                return $default;
        }
     
        return $user;
    }
}