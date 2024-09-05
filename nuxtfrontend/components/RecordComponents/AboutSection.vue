<template>
    <section class="about">
      <div class="about-content">
        <!-- <img src="path_to_image.jpg" alt="About Image" class="about-image"> -->
         <div class="about-image">
          
         </div>
        <div class="about-text">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
        </div>
      </div>
    </section>
</template>
  
  <style scoped>
  .about {
    padding: 50px 20px;
    background-color: #333;
    color: white;


  }
  
  .about-content {
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;




  }
  
  .about-image {
    width: 50%;
    border-radius: 8px;
    margin: 10px;

        
    height: 80vh;
    background-image: url('/public/frame-1@2x.png');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;

  }
  
  .about-text {
    width: 40%;
    margin: 10px;
  }
  
  .about-text h2 {
    font-size: 36px;
    margin-bottom: 20px;
  }
  
  .about-text p {
    font-size: 16px;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .about-image,
    .about-text {
      width: 100%;
      text-align: center;
    }
  
    .about-text h2 {
      font-size: 28px;
    }
  }
  </style>
  