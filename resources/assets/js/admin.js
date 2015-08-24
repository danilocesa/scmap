$(document).ready(function() {
    //Semantic UI Dropdown
    $('.ui.dropdown').dropdown();
    //Semantic UI message
    $('.message .close').on('click', function() {
        $(this).closest('.message').transition('fade');
    });
    //Semantic UI Popup
    $('.inline.icon').popup({inline: true});
    //Semantic UI Accordion
    $('.ui.accordion').accordion();

    //Profile Form Validation
    $('#profileSettings-form').form({
        fields: {
            fullName: { identifier  : 'fullName',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter your full name'
                }]
            },
            username: { identifier : 'username',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter a username'
                }]
            },
            email: { identifier : 'email',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter a email address'
                },{
                    type   : 'email',
                    prompt : 'Please enter valid email address'
                }]
            },
            password: {identifier : 'password',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter a new or current password'
                }, {
                    type   : 'minLength[6]',
                    prompt : 'Your password must be at least 6 characters'
                }]
            },
            password_confirmation: {identifier : 'password_confirmation',
                rules: [{
                    type   : 'match[password]',
                    prompt : 'Please enter same as password'
                }]
            }
        },inline : true
    });


    // Login Admin
    $("#loginForm").form({
        fields: {
            email: {identifier  : 'email',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter your e-mail'
                },{
                    type   : 'email',
                    prompt : 'Please enter a valid e-mail'
                }]
            },
            password: {identifier  : 'password',
                rules: [{
                    type   : 'empty',
                    prompt : 'Please enter your password'
                },{
                    type   : 'length[6]',
                    prompt : 'Your password must be at least 6 characters'
                }]
            }
        }
    });

    $("#pageDescForm").form({
        fields: {
            description:{identifier: 'page-desc',
                rules:[{
                    type    :'empty',
                    prompt  :'Please put a description'
                }]
            }
        },
        onSuccess: function() {
            var $descID = document.getElementById("pageDescID").value;
            var xhr = new XMLHttpRequest();
            xhr.open("put", document.getElementById("pageDescForm").action+'/'+$descID, true);
            xhr.setRequestHeader('X-CSRF-Token', document.getElementsByName("_token")[0].getAttribute("value"));
            //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //xhr.setRequestHeader("X-HTTP-Method-Override", "PUT");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        console.log(xhr);
                        //var $jsonResp = JSON.parse(xhr.responseText);
                       console.log(xhr.responseText);
                        console.log(1);
                        //console.log($jsonResp);
                    } else {
                        alert('Something got wrong. Please refresh the page.')
                    }
                }
            }
            xhr.send({
                _token:document.getElementsByName("_token")[0].getAttribute("value"),
                pageDesc: document.getElementById("page-desc").value,
                _method: 'put'
            });
            return false;
        }
    });



    //Modal
    var $openModal = document.getElementsByClassName("openModal");
    function openModal() {
        var $modalDesc = "#"+this.getAttribute("data-modal");
        $($modalDesc).modal('show');
        var $modalID = this.getAttribute("data-id");
        //Page Description Modal
        if($modalDesc = 'edit-desc'){
            var xhr = new XMLHttpRequest();
            xhr.open("get", "pages/"+$modalID, true);
            xhr.setRequestHeader('X-CSRF-Token', document.getElementsByName("csrf-token")[0].getAttribute("content"));
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 ) {
                    if(xhr.status == 200){
                        document.getElementById('pageDescID').value = $modalID;
                        var $jsonResp = JSON.parse(xhr.responseText);
                        document.getElementById("page-desc").textContent = $jsonResp.description;
                    }
                    else {
                        alert('Something got wrong. Please refresh the page.')
                    }
                }
            }
            xhr.send({_token: document.getElementsByName("csrf-token")[0].getAttribute("content")});
        }
    }

    for(var i=0; i<$openModal.length; i++) $openModal[i].onclick = openModal;







});