<template>
 <div>

   
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Chat Now
</button>

 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chat With</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
      <div class="modal-body">
      <textarea class="form-control" rows="3" placeholder="Type Your Message"></textarea>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-primary">Send Message</button>
      </div>
      </form>


    </div>
  </div>
</div>


 </div>

</template>