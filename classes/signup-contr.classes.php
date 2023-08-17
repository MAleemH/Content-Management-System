<?php

    class SignUpContr extends Signup {
        private $username;
        private $password;
        private $r_password;
        private $email;

        public function __construct($username, $password, $r_password, $email) {
            $this->username = $username;
            $this->password = $password;
            $this->r_password = $r_password;
            $this->email = $email;
        }

        public function signupUser() {
            if($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../index.php?error=emptyinput");
                exit();
            }

            if($this->invalidUsername() == false) {
                // echo "Invalid username!";
                header("Location: ../index.php?error=username");
                exit();
            }

            if($this->invalidEmail() == false) {
                // echo "Invalid email!";
                header("Location: ../index.php?error=email");
                exit();
            }

            if($this->passwordMatch() == false) {
                // echo "Password don't match!";
                header("Location: ../index.php?error=passwordmatch");
                exit();
            }

            if($this->usernameTakenCheck() == false) {
                // echo "Username or email taken!";
                header("Location: ../index.php?error=useroremailtaken");
                exit();
            }

            $this->setUser($this->username, $this->password, $this->email);
        }

        private function emptyInput() {
            $result = false;
            if (empty($this->username) || empty($this->password) || empty($this->r_password) || empty($this->email)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function invalidUsername() {
            $result = false;
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function invalidEmail() {
            $result = false;
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function passwordMatch() {
            $result = false;
            if ($this->password !== $this->r_password) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function usernameTakenCheck() {
            $result = false;
            if (!$this->checkUser($this->username, $this->email)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }