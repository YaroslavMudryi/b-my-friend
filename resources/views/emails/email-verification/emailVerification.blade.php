<h1>Verify your email</h1>
<h5>Go to the link below</h5>
<a href="{{'http://'.parse_url($_SERVER['APP_URL'])['host'].'/email/verify/'.$token.'/'.$user_id}}" class="btn btn-primary">VERIFY EMAIL</a>

<div>
<p>If you can't click the link above, just copy this link and go to it</p>
<p style="color: #2162ff">{{'http://'.parse_url($_SERVER['APP_URL'])['host'].'/email/verify/'.$token.'/'.$user_id}}</p>
</div>