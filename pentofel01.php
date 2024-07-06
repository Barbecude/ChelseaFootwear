<?php include 'header.html' ?>
<?php include 'navbar.html' ?>

<div class="container text-center mt-5">
  <div class="row">
    <div class="col-5 order-first text-start">
      <img src="assets/sepatu/produk (1).png" alt="Pentofel 01" class="gambarPentofel">
    </div>
    <div class="col-4 order-last text-start" style="overflow-y: auto; max-height: 600px;">
      <h1 class="mb-0">Pentofel 01</h1>
      <p class="fw-medium">Formal shoes</p>
      <h3 class="mb-4">Rp 168.000,00</h3>
      <span class="fw-medium" id="selected-size">Select Size</span>
      <br>
      <span id="selected-size-warn" class="fst-italic"></span>
      <div class="size mt-3">
        <div class="row">
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">39 UK</button>
          </div>
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">40 UK</button>
          </div>
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">41 UK</button>
          </div>
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">42 UK</button>
          </div>
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">43 UK</button>
          </div>
          <div class="col-4 mb-3">
            <button type="button" class="btn btn-outline-dark btn-lg w-100 size-button">44 UK</button>
          </div>
        </div>
      </div>
      
      <div class="d-grid">
        <button class="btn bg-primary text-white fw-medium py-3 rounded-5 mb-3" type="button">Buy</button>
      </div>
      <div class="row">
        <div class="col-6 mb-3">
          <button type="button" class="btn btn-outline-dark rounded-5 btn-lg w-100 tombol-fav" data-product-id="1">
            <i class="bi bi-heart" style="font-size: 15px;"></i> Favorite 
          </button>
        </div>
        <div class="col-6 mb-3">
          <button type="button" class="btn btn-outline-dark rounded-5 btn-lg w-100 tombol-cart" data-product-id="1" onclick="addToCart(this)">
           <i class="bi bi-cart" style="font-size: 15px;" id="cart-icon"></i> Cart
          </button>
        </div>
        <p class="fav"></p>
      </div>
  <div class="accordion accordion-flush overflow-hidden" id="accordionPanelsStayOpenExample">
  <div class="accordion-item ">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Description
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      Ini adalah sepatu formal yang dirancang untuk memberikan tampilan yang rapi dan elegan. Terbuat dari bahan kulit berkualitas tinggi, sepatu ini memiliki permukaan yang halus dan mengkilap. Warna coklat memberikan sentuhan klasik dan serbaguna, cocok untuk berbagai acara resmi maupun semi-formal. Bentuknya yang ramping dan desainnya yang minimalis menjadikan sepatu pentofel ini pilihan tepat untuk dipadukan dengan setelan jas, celana panjang, atau bahkan pakaian kantor sehari-hari. Sol sepatu yang kuat dan nyaman juga memastikan kaki tetap nyaman meskipun digunakan sepanjang hari.
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>

<script> </script>
<?php include 'footer.html' ?>
