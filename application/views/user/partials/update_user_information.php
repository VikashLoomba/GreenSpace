<div id="loginbox" class="mainbox col-md-12"> 
     <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title text-center">Update User Information</div>
        </div>     
        <div class="panel-body">
            <form role="form" name="user-form" id="user-form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                <label>First Name:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="first-name" type="text" class="form-control" name="name" value="" placeholder="First Name">                                        
                </div>

                <label>Last Name:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="last-name" type="text" class="form-control" name="username" value="" placeholder="Last Name">                                        
                </div>

                <label>Date of Birth:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="date" type="date" class="form-control" name="birthdate" value="">                                        
                </div> 

                <label>Password:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <label>Email:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="Contact email">                                        
                </div>

                <label>Phone Number:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="phone" type="phone" class="form-control" name="phone" value="" placeholder="Contact Phone">                                        
                </div>
                <!-- Buttons -->      
                <div class="form-group">
                    <div class="col-sm-12 controls">
                        <button id="see_information" class="btn btn-info">Cancel</button>                                        
                        <button id="confirm-update" class="btn btn-info pull-right">Submit</button>
                    </div>
                </div>
            </form>     
        </div>                     
    </div>  
</div>