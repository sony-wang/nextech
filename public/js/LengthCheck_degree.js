const filler_dom = document.querySelector('#filler');
const department_title_dom = document.querySelector('#department_title');
const phone_dom = document.querySelector('#phone');
const email_dom = document.querySelector('#email');
const company_dom = document.querySelector('#company');
const tax_id_no_dom = document.querySelector('#tax_id_no');
const capital_dom = document.querySelector('#capital');
const employees_dom = document.querySelector('#employees');
const LengthCheck = () =>{
    // 填表人
    filler_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '50' && !filler_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">填表人請少於50字</span>');
            e.target.focus()
        }else{
            if(filler_dom.parentNode.children[2] !== undefined){
                filler_dom.parentNode.children[2].remove();
            }
        }
    })
    // 部門職稱
    department_title_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '50' && !department_title_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">部門職稱請少於50字</span>');
            e.target.focus()
        }else{
            if(department_title_dom.parentNode.children[2] !== undefined){
                department_title_dom.parentNode.children[2].remove();
            }
        }
    })
    // 連絡電話
    phone_dom.addEventListener('blur',(e)=>{
        const regexNumber = new RegExp("^(?=.*[0-9])");    //正則數字
        if((!regexNumber.test(e.target.value) || e.target.value.length > '50') && !phone_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">連絡電話格式錯誤</span>');
            e.target.focus()
        }else{
            if(phone_dom.parentNode.children[2] !== undefined){
                phone_dom.parentNode.children[2].remove();
            }
        }
    })
    // E-mail
    email_dom.addEventListener('blur',(e)=>{
        const email_regex  = /^(([.](?=[^.]|^))|[\w_%{|}#$~`+!?-])+@(?:[\w-]+\.)+[a-zA-Z.]{2,63}$/;
        if((!email_regex.test(e.target.value) || e.target.value.length > '50') && !email_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">E-mail格式錯誤</span>');
            e.target.focus()
        }else{
            if(email_dom.parentNode.children[2] !== undefined){
                email_dom.parentNode.children[2].remove();
            }
        }
    })
    // 公司名稱
    company_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '50' && !company_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">公司名稱請少於50字</span>');
            e.target.focus()
        }else{
            if(company_dom.parentNode.children[2] !== undefined){
                company_dom.parentNode.children[2].remove();
            }
        }
    })
    // 統一編號
    tax_id_no_dom.addEventListener('blur',(e)=>{
        const regexNumber = new RegExp("^(?=.*[0-9])");    //正則數字
        if((!regexNumber.test(e.target.value) || e.target.value.length != '8') && !tax_id_no_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">統一編號格式錯誤</span>');
            e.target.focus()
        }else{
            if(tax_id_no_dom.parentNode.children[2] !== undefined){
                tax_id_no_dom.parentNode.children[2].remove();
            }
        }
    })
    // 資本額
    capital_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '10' && !capital_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">資本額請少於10字</span>');
            e.target.focus()
        }else{
            if(capital_dom.parentNode.children[2] !== undefined){
                capital_dom.parentNode.children[2].remove();
            }
        }
    })
    // 員工人數
    employees_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '5' && !employees_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">員工人數請少於5字</span>');
            e.target.focus()
        }else{
            if(employees_dom.parentNode.children[2] !== undefined){
                employees_dom.parentNode.children[2].remove();
            }
        }
    })



}

export default LengthCheck;