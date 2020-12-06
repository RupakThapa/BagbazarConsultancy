<style>

    .form{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items:center;
    }

    .form input{
        width: 400px;
    }

    </style>

<form action="includes/form-handler/login.php" method="post" role="form" class="form">
<h3>login</h3>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="email address" class="form-control">
</div>

<div class="form-group">
<label>Passwords</label>
<input type="password" name="password" placeholder="Password" class="form-control">
</div>

<div class="form-group">
<input type="submit" name="login_submit" value="login" class="btn" style="background-color:#D7221B;color:white;">
</div>
</form>