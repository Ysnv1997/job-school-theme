$(function() {
    $('#zxbm').on('click', function() {
        let butSubmit = $('#zxbm'),
            formName = $('#form-name').val(),
            formTel = $('#form-tel').val(),
            formMail = $('#form-mail').val(),
            formText = $('#form-text').val(),
            text = '姓名：' + formName + '<br>电话：' + formTel + '<br>邮箱：' + formMail + '<br>留言内容：' + formText;
        if (formName == '' || formTel == '') {
            message('提示：姓名和电话不能为空，请认真填写。')
            return false
        }
        if (!formName.match(/^[\u4e00-\u9fa5]+$/)) {
            message('提示：姓名填写错误，请填写中文名字，请认真填写。')
            return false
        }
        if (formTel.length != 11) {
            message('提示：请填写11位手机号码，请认真填写。')
            return false
        }
        $.ajax({
            type: "POST",
            url: "/mail/email.php",
            data: {
                text: text
            },
            dataType: "html",
            success: function(response) {
                message(response)
            },
            error: function(error) {
                message(error)
            }
        });
        return false
    })

    function message(text) {
        let message = $('#form-message')
        message.html(text).fadeIn(300);
        setTimeout(() => {
            message.fadeOut()
        }, 3000);
    }
})