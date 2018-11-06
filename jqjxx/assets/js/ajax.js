$(function() {
    function message(text) {
        let message = $('#message')
        message.html(text).fadeIn(300);
        setTimeout(() => {
            message.fadeOut()
        }, 1000);
    }
    $('#zxbm button').on('click', function() {
        let name = $('#doc-ipt-email-1').val(),
            qq = $('#doc-ipt-email-2').val(),
            tel = $('#doc-ipt-email-3').val(),
            zy = $('#doc-select-1').find("option:selected").text();

        let conText = '姓名:' + name + '</br>QQ:' + qq + '</br>电话：' + tel + '</br>专业：' + zy;
        if ($('#doc-ta-1')) {
            var messCon = $('#doc-ta-1').val();
            conText = conText + '</br>留言内容：' + messCon
        }
        if (name == '' || !name.match(/^[\u4e00-\u9fa5]+$/)) {
            message('您的姓名输入有误，请重新输入！')
            return false;
        }
        if (qq == ''||qq.length< 7 || qq.length > 10) {
            message('您的QQ输入有误，请重新输入！')
            return false;
        }
        if (tel == '' || tel.length != 11) {
            message('您的电话输入有误，请重新输入！')
            return false;
        }
        $.ajax({
            type: "post",
            url: "/mail/email.php",
            data: {
                text: conText
            },
            success: function(response) {
                message(response);
            },
            error: function(error) {
                message(error);
            }
        });
        return false;
    })
})