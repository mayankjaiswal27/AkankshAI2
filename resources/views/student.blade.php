<style>
    .logo{
        margin-left: 5%;
        margin-top: 4%; 
    }
    .navb{
        text-align: right;
        padding-right: 4.5%;
    }
    input{
        width: 400px;
        height: 50px;
        border-spacing: 4%;
        padding: 5%;
        margin: 8px 0;
        box-sizing: border-box;
        justify-content: left;
        color: #407BFF;
    }
    .second-part{
        background-color: white;
        text-align: right;
        padding: 2%;
        margin-left: 8%;
    }
    .first-part{
        background-color: white;
        padding: 2%;
        margin-left: 1.5%;
        size: 45%;
    }
    .details{
        display: flex;
        padding-inline: 5%;
    }
    .lower{
        background-color: #EDF5FF;
        margin: 5%;
        padding-right: 5%;
        padding-left: 5%;
        padding-top: 3%;
    }
    h6{
        color: #666666;
        padding-top: 5%;
        text-align: center;
    }
    .signin{
        text-align: center;
    }
    .signin a{
        color: black;
    }
    p{
        color: #000000;
        text-align: center;
        font-size: 17px;
    }
    .btn {
        width: 125px;
        height: 50px;
        padding: 1%;
        border-radius: 38px;
        background: #407BFF;
        border-color: #407BFF;
      }
  
      .btn-text {
          color: #FFF;
          font-family: Roboto;
          font-size: 15px;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
      }
      .acc-button{
       margin-left: 40%;
      }
      .robot{
        margin-left: 1%;
      }
      .create-acc{
       display: flex;
       text-align: center;
      }
      .footer-1 {
            background-color: black;
            color: white;
            margin-top: 8%;
            padding: 1%;
            text-align: center;
            justify-content: center;
            font-size: 20px;
        }
      .anc-foot {
            text-decoration: underline;
        }
        a.anc-foot {
            color: white;
            padding-left: 0%;
            padding-right: 0%;
        }
</style>
<div class="upper">
    <div class="logo">
        <img src="./assets/logo.svg"/>
    </div>
    <div class="navb">
        <a href="{{ url('/') }}" class="">Home</a>
    </div>
</div>
<div class="lower">
    <div class="details">
        <div class="first-part">
            <input type="text" name="name"  placeholder="Full Name"><br>
            <input type="text" name="username"  placeholder="Username"><br>
            <input type="email" name="email"  placeholder="Email"><br>
        </div>
        <div class="second-part">
            <input type="number" name="phone no."  placeholder="Phone no."><br>
            <input type="password" name="password"  placeholder="Password"><br>
            <input type="password" name="confirm-password"  placeholder="Confirm Password"><br>
        </div>
    </div>
    <div class="lower-2">
        <h6>Or Sign in with Google</h6>
        <div class="signin">
            <p>Already have an account?</p>
            <a href="{{ url('/auth/login') }}" class="">Login</a>
        </div>
        <div class="image">
            <img src="./assets/Sign-up.png"/>
        </div>
    </div>
</div>
<div class="create-acc">
    <div class="acc-button">
        <a href="{{url('/dashboard')}}"><button class="btn"><span class="btn-text">Create Account</span></button></a>
    </div>
    <div class="robot">
        <p>i am not a robot</p>
    </div>
</div>
<div class="footer-1">
    <footer>Made with ❤️ by  <a href="{{ route('meet') }}" class="anc-foot">Team Smart Under Criticism</a></footer>
</div>