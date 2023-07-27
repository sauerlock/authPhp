<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    </head>    
    <body>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-sm-10 mx-auto col-lg-4">   
                    <div class="card card-default">
                        <div class="card-header text-center">
                            LOGIN
                        </div>
                        <form class="p-8 p-md-5 border rounded-3 bg-light needs-validation " action="auth.php" method="POST" novalidate>
                            <div class="input-group mb-3 has-validation">                
                                    <span class="input-group-text mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </span>                        
                                <div class="form-floating mb-3"> 
                                    <input type="text" placeholder="Login" class="form-control form-control" id="user" name="user" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required/> 
                                    <label for="user">Login</label>
                                </div>
                            </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg> 
                                    </span>
                                    <div class="form-floating mb-3">      
                                        <input type="password" placeholder="Password" class="form-control form-control " id="password"  name="password" required/>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <input type="submit" name="submitButton" value="Login" class="btn btn-lg btn-success">
                            </div>
                        </form>
                        <?php
                        if ($_GET['msg']) {
                            $mensagem_error = $_GET['msg'] === 'error_login' ? 'Login Invalido!' : 'Dados invalidos!';
                        ?>  
                            <div class="card-footer border text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                </svg>                          
                                <?php echo $mensagem_error;?>
                            </div>
                        <?php
                        }
                        ?>                 
                    </div>
                    
                </div>
            
            </div>
            
        </div>
    </body>
        <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                    }, false)
                })
                })()
        </script>
</html>
