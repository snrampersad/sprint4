var dummyData = [ {
      "company":"SoFi", 
      "APR":"5.99-16.19%", 
      "minCredit":680, 
      "interestRate":12,
      "qualifications": ["Minimum credit score of 660.",
                        "Enough income to pay existing debts and a new LightStream loan.",
                        "Maximum debt-to-income ratio varies depending on existing assets and the reason for the loan."
                     ],
      "pros": ["No fees.","Rate discount for autopay.","Low starting rates."],
      "cons": ["Does not offer pre-qualification on its website.", "Requires several years of credit history."]
   },  
   {
      "company":"Avant", 
      "APR":"9.95-35.99%", 
      "minCredit":580, 
      "interestRate":15,
      "qualifications": [
         "Minimum credit score of 580.",
         "At least $20,000 in gross annual income."
      ],
      "pros": [
         "Able to fund loans within one business day.",
         "Soft credit check with pre-qualification.",
         "Option to change your payment date."
      ],
      "cons": [
         "Charges origination fee.",
         "No option to include co-signer."
      ],
   },  
   {
      "company":"Upstart", 
      "APR":"21.5%", 
      "minCredit":600, 
      "interestRate":13,
      "qualifications": [
         "Minimum credit score: 620.",
         "Minimum credit history: None.",
         "Minimum annual income: $12,000.",
         "Max debt-to-income ratio: 45%."
      ],
      "pros": [
         "Accepts borrowers new to credit.",
         "Fast funding."
      ],
      "cons": [
         "Origination and late fees.",
         "No secured or co-sign option."
      ],

   }
]

function createList(data){
   var text = "";

   for(var i = 0; i < data.length; i++){
      var listElement = document.createElement("li");
      listElement.innerHTML = data[i];
      text += listElement.outerHTML;
   }
   
   return text;
}


function deletePrevCards(){
   var toInsert = document.getElementById("displayCards");
   toInsert.innerHTML = ""; 
}

function onClick() {
   deletePrevCards();
   getInput(); 
}


function getInput() {
   var creditScore = document.getElementById("creditScore").value; 
   var loanType = document.getElementById("loanType").value; 
   var companyType = document.getElementById("companyType").value; 
   var loanRate = document.getElementById("loanRate").value; 
   var loanTerm = document.getElementById("loanTerm").value; 

   for(var i = 0; i < dummyData.length; i++){
      if(creditScore >= dummyData[i].minCredit){
         createCard(dummyData[i], loanRate, loanTerm);
      }
   }
}

function createCard(data, loanRate, loanTerm) {
   var toInsert = document.getElementById("displayCards"); 
   var noInterest = parseInt(loanRate)/(loanTerm * 12); 
   var interestFee = (data.interestRate/100) * noInterest;
   var monthlyPay = Math.floor(noInterest + interestFee);

   var html = "<div class='card mb-3'><div class='row no-gutters'> <div class='col-md-3'><h3 class='card-title' style='text-align: center;' id='cardTitle'>" 
   + data.company + "</h3></div><div class='col-md-8'><div class='card-body'><div class='row'><div class='col-lg-4'><label>APR</label><h4 id='APR'>" 
   + data.APR + "</h4></div><div class='col-lg-4'><label>Min. Credit</label><h4 id='minCredit'>" 
   + data.minCredit + "</h4></div><div class='col-lg-4'><label>Monthly Payment</label><h4 id='monthlyPay'>" 
   +'$'+ monthlyPay + "</h4></div></div><div class='row'><button class='btn btn-link btn-sm' data-toggle='collapse' data-target='#" 
   + data.company + "'>See Details"
   + "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-caret-down-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>" 
   + "<path d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'></path>"
   +  "</svg></button>"+ "<div class='collapse' "
   + "id='" + data.company + "'>"
   +     "<div class='card card-body'>"
   +         "<h5>Qualifications</h5>"
   +         "<ul id='qual'>" 
   +         createList(data.qualifications)
   +         "</ul>"
   +         "<h5>Pros</h5>"
   +         "<ul id='pros'>" 
   +         createList(data.pros)   
   +         "</ul>"
   +         "<h5>Cons</h5>"
   +         "<ul id='cons'>"
   +          createList(data.cons)
   +         "</ul>"
   +      "</div>"
   +   "</div>"
   +"</div></div></div></div></div>"
   
   var newCard = document.createElement("div");
   newCard.innerHTML = html;
   toInsert.appendChild(newCard);

   // "<div class='card mb-3'>
   //    <div class='row no-gutters'>
   //    <div class='col-md-3'>
   //       <h3 class='card-title' style='text-align: center;' id='cardTitle'> + 'data.company' + </h3>
   //    </div>
   //    <div class='col-md-8'>
   //          <div class='card-body'>
   //             <div class='row'>
   //                <div class='col-lg-4'>
   //                   <label>APR</label>
   //                   <h4 id='APR'> + 'data.APR' +</h4>
   //                </div>
   //                <div class='col-lg-4'>
   //                   <label>Min. Credit</label>
   //                   <h4 id='minCredit'> + 'data.minCredit' + </h4>
   //                </div>
   //                <div class='col-lg-4'>
   //                   <label>Monthly Payment</label>
   //                   <h4 id='monthlyPay'> + 'monthlyPay' + </h4>
   //                </div>
   //             </div>
   //             <div class='row'>
   //                <button class='btn btn-link btn-sm'>See Details
   //                   <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-caret-down-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
   //                      <path d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'></path>
   //                   </svg>
   //                </button>
                     // <div class='collapse' id='seeDetails'>
                     //          <div class='card card-body'>
                     //             <h5>Qualifications</h5>
                     //             <ul id='qualifications'>
                                    
                     //             </ul>
                     //             <h5>Pros</h5>
                     //             <ul id='pros'>
                                    
                     //             </ul>
                     //             <h5>Cons</h5>
                     //             <ul id='cons'>
                                    
                     //             </ul>
                     //          </div>
                     //        </div>
   //             </div>
   //          </div>
   //       </div>
   //    </div>
   // </div>"
}
