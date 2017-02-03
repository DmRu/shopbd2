window.onload = (function() {
    VK.init({
        apiId: 5825372 //ВАШ_IP_ID
    });
    function authInfo(response)
    {
        if (response.session)
        {
            document.getElementById('id').innerHTML = "Your ID: " + response.session.mid;
        }
        else
        {
            document.getElementById('id').innerHTML = 'Вы не авторизованы вконтакте.';
        }
    }
    VK.Auth.getLoginStatus(authInfo);
});
