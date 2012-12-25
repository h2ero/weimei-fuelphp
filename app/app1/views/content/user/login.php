        <form action="login?referrer=<?php echo $referrer; ?>" method="POST" name="loginForm" id="loginForm">
            <h1>用户登陆</h1>
            <div class="error">
                    <label>&nbsp;</label>
                    <span id="error"></span>
            </div>
            <div class="item">
                <label>邮箱：</label>
                <input maxlength="50" class="input-r" value="" name="email" id="" placeholder="输入常用邮箱" type="text">
                <span id="uname_tip"></span>
            </div>
            <div class="item">
                <label>密码：</label>
                <input maxlength="20" class="input-r" name="password" id="password" placeholder="输入不常用的密码" type="password">
                <span id="pwd_tip"></span>
            </div>  
            <div class="item">
                <input class="red-btn" value="登 录" id="loginBtn" type="submit">
                <span><a href="/user/lost_pwd">忘记密码？</a></span>
            </div>              
    </form>
    
