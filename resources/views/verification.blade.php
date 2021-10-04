<div class="card">
    <div class="card-body">
        <h5 class="card-title">Online Book Club</h5>
        <p>
        Verify your email address
        Hi {{$user->name}}!,
        
        Welcome to Online Book Club!!

        To get access to your account please verify your email address by clicking the link below.
        </p>

        <div>
            <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">Click here</a>
        </div>
    </div>
</div>