        <form action="reg" method="POST" name="regForm" id="regForm">
            <h1>新用户注册</h1>
            <div class="error">
                <label> &nbsp;</label>
                <span id="error"></span>
            </div>
            <div class="item">
                <label> 邮箱：</label>
                <input value="" maxlength="50" class="input-r" name="email" id="email" placeholder="输入常用邮箱" type="text">
                <span class="error"></span>
            </div>
            <div class="tips"> </div>
            <div class="item">
                <label> 昵称：</label>
                <input value="" maxlength="10" class="input-r" name="username" id="username" placeholder="输入你常用的网名" type="text">
                <span class="error"></span>
                <div class="tips">确定后不可修改,最多10个字符</div>
            </div>
            <div class="item">
                <label>密码：</label>
                <input maxlength="16" class="input-r" name="password" id="password" placeholder="输入不常用的密码" type="password">
                <span class="error"></span>
                <div class="tips">密码为6-16位英文或数字</div>
            </div>
            <div class="item"></div>
            <div class="item">
                <input value="注册" class="red-btn" name="regBtn" disabled="true" id="regBtn" type="submit">
            </div>
        </form>
