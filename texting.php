<!DOCTYPE html>
<html>
  <head>
    <title>Car Rental Website</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>

    <header>
      <div class="logo">
        <img src="logo.png" alt="Your logo">
      </div>
      <div class="search">
        <form>
          <input type="text" placeholder="Search...">
          <button type="submit">Go</button>
        </form>
      </div>
      <nav>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </nav>
    </header>
    

    <div class="book-a-car">
      <div class="book-a-car-line"></div>
      <h2>Book a Car</h2>

      </br>

      <form>
        <div class="form-group">
          <label for="car-brand">Car Types:</label>
          <select id="car-brand">
            <option value=" Luxurious Car"> Luxurious Car</option>
            <option value="Sports Car">Sports Car</option>
            <option value="Classics">Classics Car</option>
            <!-- Add more options as needed -->
          </select>
        </div>
      
      </br>

        <div class="form-group">
          <label for="pick-up-location" >Pick-up Location:</label>
          <input type="text" id="pick-up-location" name="pick-up-location" placeholder="Semenyih,Selangor.">
        </div>

      </br>

        <div class="form-group">
          <label for="pick-up-date">Pick-up Date:</label>
          <input type="date" id="pick-up-date" name="pick-up-date">
        </div>

      </br>

        <div class="form-group">
          <label for="drop-off-date">Drop-off Date:</label>
          <input type="date" id="drop-off-date" name="drop-off-date">
        </div>

      </br>

        <div class="form-group">
          <button type="submit">Search Car Now</button>
        </div>
      </form>
    </div>

    <h2 class="car-collection-header">Our Car Collection</h2>
    <h3 class="luxury-car-header">Luxurious Car</h3>

    </br>

    <div class="car-container">
      <img src="bluerolls.jpg" alt="Car 1 Image" style="height: 200px; width: 350px;">
       &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
      <div class="car-details">
        <h3>Rolls Royce Phantom (Blue)</h3>
        <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
        
        <ul>
          <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
          <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
          <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
          <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
          <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
          <i style='font-size:24px' class='fas'>&#xf406;</i>
        </ul> 
      
        <button>Book Now</button>       
      </div>
    </div>



    <div class="car-container">
      <img src="img/whitebent.jpg" alt="Car 1 Image">
       &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
      <div class="car-details">
        <h3>Bentley Continental Flying Spur (White)</h3>
        <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
        
        <ul>
          <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
          <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
          <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
          <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
          <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
          <i style='font-size:24px' class='fas'>&#xf406;</i>
        </ul> 
      
        <button>Book Now</button>       
      </div>
    </div>




    <div class="car-container">
      <img src="img/silvercls.jpg" alt="Car 1 Image">
       &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
      <div class="car-details">
        <h3>Mercedes Benz CLS 350 (Silver)</h3>
        <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
        
        <ul>
          <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
          <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
          <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
          <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
          <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
          <i style='font-size:24px' class='fas'>&#xf406;</i>
        </ul> 
      
        <button>Book Now</button>       
      </div>
    </div>



      <div class="car-container">
      <img src="img/champagnejaguar.jpg" alt="Car 1 Image">
       &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
      <div class="car-details">
        <h3>Jaguar S Type (Champagne)</h3>
        <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
        
        <ul>
          <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
          <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
          <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
          <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
          <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
          <i style='font-size:24px' class='fas'>&#xf406;</i>
        </ul> 
      
        <button>Book Now</button>       
       </div>
      </div>

      <!--Sports Car-->
      <h3 class="luxury-car-header">Sports Car</h3>

      <div class="car-container">
        <img src="img/redscuderia.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Ferrari F430 Scuderia (Red)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>


      <div class="car-container">
        <img src="img/matteblacklambo.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Lamborghini Murcielago LP640 (Matte Black)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>

      <div class="car-container">
        <img src="img/whiteboxster.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Porsche Boxster (White)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>

      <div class="car-container">
        <img src="img/blacklexus.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Lexus SC430 (Black)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>


      <h3 class="luxury-car-header">Classics Car</h3>

      <div class="car-container">
        <img src="img/MK2.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Jaguar MK 2 (White)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>


      <div class="car-container">
        <img src="img/limousine.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>Rolls Royce Silver Spirit Limousine (Georgian Silver)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>


      <div class="car-container">
        <img src="img/redmg.jpg" alt="Car 1 Image">
         &nbsp;&nbsp;&nbsp;&nbsp;<!--sorry-->
        <div class="car-details">
          <h3>MG TD (Red)</h3>
          <p>The Rolls Royce Phantom (Blue) is the epitome of luxury and sophistication. With its sleek design and premium features, you're sure to turn heads wherever you go.</p>
          
          <ul>
            <li><span class="label">Top Speed:</span> 250 km/h &#x1F680;</li>
            <li><span class="label">Horsepower:</span> 563 &#x1F40E;</li>
            <li><span class="label">0-60 mph:</span> 5.1 seconds &#x1F3C3;</li>
            <li><span class="label">Seating Capacity:</span> 5 &#x1F4CD;</li>
            <li><span class="label">Features:</span> Built-in Navigation, Leather Interior, Premium Sound System, Climate Control &#x1F50E;</li>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
          </ul> 
        
          <button>Book Now</button>       
         </div>
      </div>


      <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>


  </body>
</html>

