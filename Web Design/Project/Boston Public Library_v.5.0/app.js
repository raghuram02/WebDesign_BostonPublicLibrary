
(function() {
    angular
        .module("BostonPublicLibrary",[])
        .controller("mainController", mainController);

    function mainController($scope) {
        $scope.showCurrentUser = false;
        $scope.login = login;
        $scope.logout = logout;
        $scope.signup = signup;

        users = [
        {name:"Raghu",username:"raghu", password:"raghu"},
        {name:"Harish",username:"harish", password:"harish"}
        ];

        function signup(user){
            var existingUser = false;
            var specialCharacters = false;
            var invalidPassword = false;
            if(user){
                if(user.username){
                    for (var u in users){
                        if (users[u].username == user.username){
                            existingUser = true;
                        }
                    }
                    if(!/^[a-zA-Z0-9]+$/.test(user.username)){
                        specialCharacters = true;
                    }
                }
                if(user.password){
                    if(!/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(user.password)){
                        invalidPassword = true;
                    }
                }

            }
            if(!user){
                $scope.message = "Please enter the details";
            }
            else if(!user.name){
                $scope.message = "Name cannot be null";
            }
            else if(!user.username){
                $scope.message = "Username cannot be null";
            }
            else if(!user.password){
                $scope.message = "Password cannot be null";
            }
            else if(user.username.length < 5){
                $scope.message = "Username cannot be less than 5 characters";
            }
            else if(existingUser){
                $scope.message = "Username already exists";
            }
            else if(specialCharacters){
                $scope.message = "Username cannot contain any special characters";
            }
            else if(invalidPassword){
                $scope.message = " Invalid Password. Password should atleast contain one uppercase one lower case one special character one digit. password should also be 6 to 16 characters long";
            }
            else{
                $scope.user = "";
                $scope.message = "";
                users.push(user);
                alert("Registration successful");
                $('#signUpModal').modal('hide');
                $('#loginModal').modal('show');
            }
        }

        function login(user){
            var foundUser = false;
            for (var u in users){
                if (users[u].username == user.username && users[u].password == user.password){
                    foundUser = true;
                    alert("Logged in successfully");
                    $scope.user = "";
                    $scope.loggedinUser = user;
                    $scope.showCurrentUser = true;
                    $('#loginModal').modal('hide');
                }
            }
            if (!foundUser){
                $scope.user = "";
                alert("Invalid Credentials");
            }
        }

        function logout(){
            $scope.showCurrentUser = false;
            alert("Logged out successfully");
        }


    }
})();