const tax_id_no_dom = document.querySelector('#tax_id_no');
const company_dom = document.querySelector('#company');
const address_dom = document.querySelector('#address');
const capital_dom = document.querySelector('#capital');
const employees_dom = document.querySelector('#employees');
const revenue_dom = document.querySelector('#revenue');
const expect_custom_dom = document.querySelector('#expect-custom');
const recommend_dom = document.querySelector('#recommend');
const LengthCheck = () =>{
    // 統一編號
    tax_id_no_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length != '8' && !tax_id_no_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">統一編號格式錯誤</span>');
            e.target.focus()
        }else{
            if(tax_id_no_dom.parentNode.children[2] !== undefined){
                tax_id_no_dom.parentNode.children[2].remove();
            }
        }
    })
    // 公司名稱
    company_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '20' && !company_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">公司名稱請少於20字</span>');
            e.target.focus()
        }else{
            if(company_dom.parentNode.children[2] !== undefined){
                company_dom.parentNode.children[2].remove();
            }
        }
    })
    // 公司名稱
    address_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '50' && !address_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">公司地址請少於50字</span>');
            e.target.focus()
        }else{
            if(address_dom.parentNode.children[2] !== undefined){
                address_dom.parentNode.children[2].remove();
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
    // 110年營收
    revenue_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '10' && !revenue_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">110年營收請少於10字</span>');
            e.target.focus()
        }else{
            if(revenue_dom.parentNode.children[2] !== undefined){
                revenue_dom.parentNode.children[2].remove();
            }
        }
    })
    // 期待學習主題 其他(請說明)
    expect_custom_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '255' && !expect_custom_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">其他(請說明)請少於255字</span>');
            e.target.focus()
        }else{
            if(expect_custom_dom.parentNode.children[1] !== undefined){
                expect_custom_dom.parentNode.children[1].remove();
            }
        }
    })
    // 訊息來源
    recommend_dom.addEventListener('blur',(e)=>{
        if(e.target.value.length > '100' && !recommend_dom.nextElementSibling){
            e.target.value = '';
            e.target.insertAdjacentHTML('afterend', '<span class="text-danger">訊息來源請少於100字</span>');
            e.target.focus()
        }else{
            if(recommend_dom.parentNode.children[2] !== undefined){
                recommend_dom.parentNode.children[2].remove();
            }
        }
    })




}

export default LengthCheck;