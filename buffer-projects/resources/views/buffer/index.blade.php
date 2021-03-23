<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="page-header">
            <h1>Laravel Form</h1>
        </div><!-- page-header -->

        <div class="row">
            <div class="col-sm-6">
                <form name="bufferForm" action="{{ url('store') }}"method="POST" onsubmit="return(validate());"> 

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="First name">
                        <span id="firstNameSpan" class="text-danger"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Last name">
                        <span id="lastNameSpan" class="text-danger"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <span id="emailSpan" class="text-danger"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span id="passwordSpan" class="text-danger"></span>
                    </div>
                    
                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-primary btn-lg" data-toggle="" data-target="#myModal">
                    Submit
                    </button><!-- .btn btn-primary btn-lg -->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            
                            <div class="modal-content">
                                
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">User Details</h4>
                                </div><!-- .modal-header -->
                                
                                <div class="modal-body">
                                    <p><strong class="pull-left text-success">User successfully created</strong></p>
                                </div><!-- .modal-body -->
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div><!-- .modal-footer -->
                            </div><!-- .modal-content -->
                        </div><!-- .modal-dialog -->
                    </div><!-- .modal fade -->

                </form>
            </div><!-- col-sm-6 -->
        </div><!-- row -->
    </div><!-- container -->

    <!-- jQuery necessary for Bootstrap's JavaScript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
        // Form validation code will come here.
        function validate() {
            
            // Flag to check if validation fails or succeeds before popping the modal
            var checkFlag = true;

            if (document.bufferForm.firstName.value == "") {
                document.getElementById("firstNameSpan").innerHTML = "First name required";
                document.bufferForm.firstName.focus();
                checkFlag = false;
                return false;
            }
            if (document.bufferForm.lastName.value == "") {
                document.getElementById("lastNameSpan").innerHTML = "Last name required";
                document.bufferForm.lastName.focus();
                checkFlag = false;
                return false;
            }
            if (document.bufferForm.email.value == "") {
                document.getElementById("emailSpan").innerHTML = "email required";
                document.bufferForm.email.focus();
                checkFlag = false;
                return false;
            }
            if (document.bufferForm.password.value == "") {
                document.getElementById("passwordSpan").innerHTML = "password required";
                document.bufferForm.password.focus();
                checkFlag = false;
                return false;
            }
            
            return $('#myModal').modal();
        }
    </script>
</body>
</html>