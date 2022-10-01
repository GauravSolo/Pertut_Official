
const button = document.querySelector('#submit');
const modal = document.querySelector('#siblingbutton');
const error =  document.querySelector('.error');
var Tusers = document.querySelector('#Tusers');
var Tenquiries = document.querySelector("#Tenquiries");


button.addEventListener('click',(e)=>{
    e.preventDefault();


    button.innerHTML = "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span><span style='margin-left:5px;'>Loading... </span>";


    var username =  document.querySelector("input[name='username']").value;
    var email =  document.querySelector("input[name='email']").value;
    var phone =  document.querySelector("input[name='phone']").value;
    var selectvaue = document.querySelector("select[name='category']");
    var category = selectvaue.options[selectvaue.selectedIndex].text;
    var message = document.querySelector("textarea[name='message']").value;

    var flag = 0;
    if(!username)
    {
        document.querySelector("label[for='form34']").classList.add('active');
        document.querySelector("input[name='username']").classList.add('invalid');

        setTimeout(()=>{
            document.querySelector("label[for='form34']").classList.remove('active');
            document.querySelector("input[name='username']").classList.remove('invalid');
        },3000)
        flag = 1;
    }
    if(!email)
    {
        document.querySelector("label[for='form29']").classList.add('active');
        document.querySelector("input[name='email']").classList.add('invalid');
        
        setTimeout(()=>{
            document.querySelector("label[for='form29']").classList.remove('active');
            document.querySelector("input[name='email']").classList.remove('invalid');
        },3000)
        flag = 1;
    }
    if(!phone)
    {
        document.querySelector("label[for='form28']").classList.add('active');
        document.querySelector("input[name='phone']").classList.add('invalid');

        setTimeout(()=>{
            document.querySelector("label[for='form28']").classList.remove('active');
            document.querySelector("input[name='phone']").classList.remove('invalid');
        },3000)
        flag = 1;
    }

    if(flag)
    {
        button.innerHTML = "SUBMIT";
        return;
    }
    if(!message)
    {
        message = 'empty';
    }


    const xhr = new XMLHttpRequest();

    xhr.open('POST','submit.php',true);
    // xhr.setRequestHeader('Content-Type','multipart/formdata');
    xhr.responseType = 'json';
    xhr.onload = ()=>{
        if(xhr.status === 200)
        {
            var res = xhr.response;
            
            if(res.res == '0')
            {
                error.innerText = 'Something Went Wrong';
                setTimeout(() => {
                    error.innerText = "";
                }, 3000);
            }
            else{
                
                modal.click();
            }

            button.innerHTML = "SUBMIT";           
        }
    };
    
    const formdata = new FormData();
    formdata.append('username',username);
    formdata.append('email',email);
    formdata.append('phone',phone);
    formdata.append('category',category);
    formdata.append('message',message);
    
    xhr.send(formdata); 
});
