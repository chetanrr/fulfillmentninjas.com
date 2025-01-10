<div class="row orderProducts"></div>
<input type="hidden" name="isProductSelected" value="" />

<script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
<script>
   for (i = 0; i < products.data.length; i++) {
      document.querySelector('.row.orderProducts').innerHTML += `
      <div class="col-md-12 mb-3 text-center">
         <div class="card product-section product-unsection">
            <div class="card-body p-0 w-100">
               <div id="${products.data[i].sectionid}">
                  <img class="bottle" src="bp_assets/images/${products.data[i].name.replace(/ |\//g, "-")}.jpg">
                  <h6 class="py-2 ml-3">${products.data[i].name}</h6>            
                  <div class="cart">            
                     <select data-id="${products.data[i].id}" data-pack="${products.data[i].pack}" data-product="<?php productName(); ?> ${products.data[i].name}" data-price="$${products.data[i].price}" data-shipping="$${products.data[i].shippingPrice}" data-color="C46832">
                        <option>Straight Sale</option>                  
                     </select>
                     <div class="pricetotal">
                        <aside>
                           <span class="subtotal my-2 d-block">Subtotal: n/a</span>
                           <span class="shipping my-2 d-block">Shipping and handling: n/a</span>
                        </aside>
                        <div class="cart-table">                     
                           <div class="show-total">
                              <label>Total:</label>
                              <label class="show_total">$0.00</label>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>`
  }
</script>