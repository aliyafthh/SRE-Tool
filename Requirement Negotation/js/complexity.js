
      // let textbox=document.querySelector('#input');
    let textbox=document.querySelector('#input');
    textbox.addEventListener('change',function(){
        $('.selectpicker').selectpicker();
        let textEntered = textbox.value;
        //   let time =['time','period','hour','day','minute'];
        //   let quality =['perform','quality','plan','control'];
        //   let stakeholder =['stakeholder','team','user'];
        let STAKEHOLDER=[ 'collaborator','colleague','partner','shareholder','associate','contributor','participant','ally','team member'];
        let SCHEDULE=['agenda','calendar','chart','itinerary','lineup','list','program','record','roster','timetable','appointments','catalog','diagram','docket','inventory','registry','roll','table','order of business','sked'];
        let RISK=['danger','exposure','hazard','liability','opportunity','peril','possibility','prospect','uncertainty','accident','contingency','flyer','fortuity','fortune','gamble','header','jeopardy','luck','openness','plunge','speculation','stab','venture','wager','exposedness','liableness','shot in the dark'];
        let COST=['amount','charge','damage','expenditure','figure','outlay','payment','price','price tag','rate','tariff','value','worth','bite','disbursement','dues','line','nick','nut','score’,’setback','squeeze','tab','ticket','toll','arm and a leg','bad news','bottom dollar','bottom line','top dollar'];
        let SCOPE=['breadth','capacity','extension','opportunity','outlook','purview','sphere','ambit','amplitude','area','compass','comprehensiveness','confines','field','freedom','fullness','latitude','leeway','liberty','margin','orbit','play','radius','reach','room','run','space','span','wideness','elbow room','field of reference'];
        let QUALITY=['aspect','character','condition','element','kind','nature','trait','affection','affirmation','attribute','constitution','description','endowment','essence','factor','genius','individuality','make','mark','parameter','peculiarity','predication','property','savor','sort','virtue','name of tune','nature of beast','way of it'];
        let RESOURCE=['ability','capability','capital','means','property','reserve','source','support','system','talent','wealth','appliance','artifice','assets','cleverness','contraption','contrivance','course','creation','device','expedient','fortune','hoard','ingenuity','initiative','inventiveness','makeshift','measure','method','mode','quick-wittedness','recourse','refuge','relief','resourcefulness','riches','shift','step','stock','stockpile','store','stratagem','substance','substitute','surrogate','way','worth','nest egg'];
        let COMMUNICATIONS=['connection','contact','conversation','delivery','intelligence','link','transmission','advice','advisement','articulation','assertion','communion','converse','correspondence','declaration','dissemination','elucidation','expression','interchange','intercommunication','intercourse','mention','publication','reading','reception','revelation','talk','talking','telling','transfer','utterance','writing','announcing','corresponding','disclosing','making known','notifying','translating'];
        let PROCUREMENT=['acquisition','acquirement','appropriation','attainment','procuring'];

          var matchSCHEDULE = SCHEDULE.some(myfunction);
          var matchQUALITY = QUALITY.some(myfunction);
          var matchSTAKEHOLDER = STAKEHOLDER.some(myfunction);
          var matchRISK = RISK.some(myfunction);
          var matchCOST = COST.some(myfunction);
          var matchSCOPE = SCOPE.some(myfunction);
          var matchRESOURCE = RESOURCE.some(myfunction);
          var matchCOMMUNICATIONS = COMMUNICATIONS.some(myfunction);
          var matchPROCUREMENT = PROCUREMENT.some(myfunction);
          //Find match
        function myfunction(value,index,array){
              return textEntered.toLowerCase().includes(array[index]);
        }

        if(matchSCHEDULE===true){
              // recommend+=' Time ';
              // document.querySelector('#msg').innerText=recommend;
              document.querySelector('#Schedule').setAttribute("data-subtext", "Recommended");
              document.querySelector('#Schedule').setAttribute("style", "color: green;");
              
        }else{
              // document.querySelector('#msg').innerText='';
              document.querySelector('#Schedule').setAttribute("data-subtext", "");
              document.querySelector('#Schedule').setAttribute("style", "color: none;");
        }
        if(matchQUALITY===true){
              // recommend+=' Quality ';
              // document.querySelector('#msg').innerText=recommend;
              document.querySelector('#Quality').setAttribute("data-subtext", "Recommended");
              document.querySelector('#Quality').setAttribute("style", "color: green;");
        }else{
              
              document.querySelector('#Quality').setAttribute("data-subtext", "");
              document.querySelector('#Quality').setAttribute("style", "color: none;");
        }
        if(matchSTAKEHOLDER===true){
              // recommend+=' Stakeholder ';
              // document.querySelector('#msg').innerText=recommend;
              document.querySelector('#Stakeholder').setAttribute("data-subtext", "Recommended");
              document.querySelector('#Stakeholder').setAttribute("style", "color: green;");
        }else{
              document.querySelector('#Stakeholder').setAttribute("data-subtext", "");
              document.querySelector('#Stakeholder').setAttribute("style", "color: none;");
        }
        if(matchRISK===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Risk').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Risk').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Risk').setAttribute("data-subtext", "");
            document.querySelector('#Risk').setAttribute("style", "color: none;");
        }
        if(matchCOST===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Cost').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Cost').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Cost').setAttribute("data-subtext", "");
            document.querySelector('#Cost').setAttribute("style", "color: none;");
        }
        if(matchSCOPE===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Scope').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Scope').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Scope').setAttribute("data-subtext", "");
            document.querySelector('#Scope').setAttribute("style", "color: none;");
        }
        if(matchRESOURCE===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Resource').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Resource').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Resource').setAttribute("data-subtext", "");
            document.querySelector('#Resource').setAttribute("style", "color: none;");
        }
        if(matchCOMMUNICATIONS===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Communications').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Communications').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Communications').setAttribute("data-subtext", "");
            document.querySelector('#Communications').setAttribute("style", "color: none;");
        }
        if(matchPROCUREMENT===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Procurement').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Procurement').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Procurement').setAttribute("data-subtext", "");
            document.querySelector('#Procurement').setAttribute("style", "color: none;");
        }
          $(".selectpicker").selectpicker('render').selectpicker("refresh");
        })


    let textbox1=document.querySelector('#input2');
    textbox1.addEventListener('change',function(){
        $('.selectpicker').selectpicker();
        let textEntered1 = textbox1.value;
        //   let time =['time','period','hour','day','minute'];
        //   let quality =['perform','quality','plan','control'];
        //   let stakeholder =['stakeholder','team','user'];

        let STAKEHOLDER=[ 'collaborator','colleague','partner','shareholder','associate','contributor','participant','ally','team member'];
        let SCHEDULE=['agenda','calendar','chart','itinerary','lineup','list','program','record','roster','timetable','appointments','catalog','diagram','docket','inventory','registry','roll','table','order of business','sked'];
        let RISK=['danger','exposure','hazard','liability','opportunity','peril','possibility','prospect','uncertainty','accident','contingency','flyer','fortuity','fortune','gamble','header','jeopardy','luck','openness','plunge','speculation','stab','venture','wager','exposedness','liableness','shot in the dark'];
        let COST=['amount','charge','damage','expenditure','figure','outlay','payment','price','price tag','rate','tariff','value','worth','bite','disbursement','dues','line','nick','nut','score’,’setback','squeeze','tab','ticket','toll','arm and a leg','bad news','bottom dollar','bottom line','top dollar'];
        let SCOPE=['breadth','capacity','extension','opportunity','outlook','purview','sphere','ambit','amplitude','area','compass','comprehensiveness','confines','field','freedom','fullness','latitude','leeway','liberty','margin','orbit','play','radius','reach','room','run','space','span','wideness','elbow room','field of reference'];
        let QUALITY=['aspect','character','condition','element','kind','nature','trait','affection','affirmation','attribute','constitution','description','endowment','essence','factor','genius','individuality','make','mark','parameter','peculiarity','predication','property','savor','sort','virtue','name of tune','nature of beast','way of it'];
        let RESOURCE=['ability','capability','capital','means','property','reserve','source','support','system','talent','wealth','appliance','artifice','assets','cleverness','contraption','contrivance','course','creation','device','expedient','fortune','hoard','ingenuity','initiative','inventiveness','makeshift','measure','method','mode','quick-wittedness','recourse','refuge','relief','resourcefulness','riches','shift','step','stock','stockpile','store','stratagem','substance','substitute','surrogate','way','worth','nest egg'];
        let COMMUNICATIONS=['connection','contact','conversation','delivery','intelligence','link','transmission','advice','advisement','articulation','assertion','communion','converse','correspondence','declaration','dissemination','elucidation','expression','interchange','intercommunication','intercourse','mention','publication','reading','reception','revelation','talk','talking','telling','transfer','utterance','writing','announcing','corresponding','disclosing','making known','notifying','translating'];
        let PROCUREMENT=['acquisition','acquirement','appropriation','attainment','procuring'];
  
        var matchSCHEDULE = SCHEDULE.some(myfunction);
        var matchQUALITY = QUALITY.some(myfunction);
        var matchSTAKEHOLDER = STAKEHOLDER.some(myfunction);
        var matchRISK = RISK.some(myfunction);
        var matchCOST = COST.some(myfunction);
        var matchSCOPE = SCOPE.some(myfunction);
        var matchRESOURCE = RESOURCE.some(myfunction);
        var matchCOMMUNICATIONS = COMMUNICATIONS.some(myfunction);
        var matchPROCUREMENT = PROCUREMENT.some(myfunction);
          //Find match
        function myfunction(value,index,array){
            return textEntered1.toLowerCase().includes(array[index]);
        }

        if(matchSCHEDULE===true){
            // recommend+=' Time ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Schedule1').setAttribute("data-subtext", "Recommended");
            
        }else{
            // document.querySelector('#msg').innerText='';
            document.querySelector('#Schedule1').setAttribute("data-subtext", "");
        }
        if(matchQUALITY===true){
            // recommend+=' Quality ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Quality1').setAttribute("data-subtext", "Recommended");
        }else{
            
            document.querySelector('#Quality1').setAttribute("data-subtext", "");
        }
        if(matchSTAKEHOLDER===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Stakeholder1').setAttribute("data-subtext", "Recommended");
        }else{
            document.querySelector('#Stakeholder1').setAttribute("data-subtext", "");
        }
        if(matchRISK===true){
        // recommend+=' Stakeholder ';
        // document.querySelector('#msg').innerText=recommend;
        document.querySelector('#Risk1').setAttribute("data-subtext", "Recommended");
        document.querySelector('#Risk1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Risk1').setAttribute("data-subtext", "");
            document.querySelector('#Risk1').setAttribute("style", "color: none;");
        }
        if(matchCOST===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Cost1').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Cost1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Cost1').setAttribute("data-subtext", "");
            document.querySelector('#Cost1').setAttribute("style", "color: none;");
        }
        if(matchSCOPE===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Scope1').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Scope1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Scope1').setAttribute("data-subtext", "");
            document.querySelector('#Scope1').setAttribute("style", "color: none;");
        }
        if(matchRESOURCE===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Resource1').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Resource1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Resource1').setAttribute("data-subtext", "");
            document.querySelector('#Resource1').setAttribute("style", "color: none;");
        }
        if(matchCOMMUNICATIONS===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Communications1').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Communications1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Communications1').setAttribute("data-subtext", "");
            document.querySelector('#Communications1').setAttribute("style", "color: none;");
        }
        if(matchPROCUREMENT===true){
            // recommend+=' Stakeholder ';
            // document.querySelector('#msg').innerText=recommend;
            document.querySelector('#Procurement1').setAttribute("data-subtext", "Recommended");
            document.querySelector('#Procurement1').setAttribute("style", "color: green;");
        }else{
            document.querySelector('#Procurement1').setAttribute("data-subtext", "");
            document.querySelector('#Procurement1').setAttribute("style", "color: none;");
        }
        $(".selectpicker").selectpicker('render').selectpicker("refresh");
          
    })
