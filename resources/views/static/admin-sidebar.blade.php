<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <img src="{{ asset('../img/logo/lbi.png') }}" alt="LBI">
            <div class="logo_name">Admin Dashboard</div>
        </div>
        <!-- <i class="bx bx-menu" id="btn"></i> -->
    </div>

    <ul class="nav_list">
        <li>
            <a href="admin/">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li>
            <a href="accounts">
                <i class="bx bx-user"></i>
                <span class="links_name">Accounts</span>
            </a>
            <!-- <span class="tooltip">Accounts</span> -->
        </li>
        <li>
            <a href="#">
                <i class="bx bx-book-content"></i>
                <span class="links_name">Classes</span>
            </a>
            <!-- <span class="tooltip">Classes</span> -->
        </li>
        <li>
            <a href="#">
                <i class="bx bxs-calendar"></i>
                <span class="links_name">Schedules</span>
            </a>
            <!-- <span class="tooltip">Schedules</span> -->
        </li>
        <li>
            <a href="logout">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log Out</span>
            </a>
            <!-- <span class="tooltip">Log Out</span> -->
        </li>
    </ul>

    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="{{$info->prof_dir}}" alt="Profile">
                <div class="name_job">
                    <div class="name">{{$info->first_name}} {{$info->family_name}}</div>
                    <div class="job">{{$info->job_title}}</div>
                </div>
            </div>
            <a href="logout" class="log_out">
                <i class="bx bx-log-out" id="log_out"></i>
            </a>
        </div>
    </div>
</div>