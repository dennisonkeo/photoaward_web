<div class="row header menu">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <ul class="nav nav-pills pull-right">
            <li class="overview active">
                <a href="{{ route('submit-entry') }}">Overview</a>
            </li>
            <li class="competitions-link">
                <a href="{{ route('submit-entry') }}#competitions" style="color: #ff00ff;">Competitions</a>
            </li>
             <li class="profile ">
                <a href="{{ route('submit-entry') }}#my_entries" style="color: #ff00ff;">
                     Entries</a>
            </li> 

            <li class="profile ">
                <a href="{{ route('profile') }}" style="color: #ff00ff;">
                    Profile</a>
            </li>
            <li class="account ">
                <a href="#" style="color: #ff00ff;" >
                    Account</a>
            </li>
            <li class="account ">
                <a href="{{ route('/') }}" style="color: #ff00ff;" >
                    Home</a>
            </li>

            <li class="profile ">
                <a href="{{ route('logout') }}" class="" style="color: #ff00ff;" >
                   <i clas="fa fa-sign-out"></i> Logout</a>
            </li>

        </ul> <!-- End nav -->
    </div>
</div> <!-- End row header -->