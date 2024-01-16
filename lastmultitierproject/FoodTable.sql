DROP DATABASE IF EXISTS Food;

CREATE DATABASE Food;

USE Food;

CREATE TABLE Food
(
   no int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		Name varchar(20),
   Price int(30),
	Specification varchar(30),
	Description varchar(150),
   code varchar(100) NOT NULL,

   image varchar(300)NOt Null,
   UNIQUE KEY code (code)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO Food (Name,Price,Specification,Description,code,image) VALUES 
('Dried Cranberries',21,'organic','  Very Low Sodium Double Certified -Organically Grown Organic Apple Juice Concentrate Infused Pure & Purifying<','1',"Images/organic2.jpg")
,('Wild Blueberry',44,'organic','   30 Calories Per Serving 33% Less Sugar Than A Preserve Varietal Fruit Chosen with Care Naturally Gluten Free Certified Organic by QAI','2',"Images/organic3.jpg" )
,('Protein Pancake and Baking Mix',40,'vegan','20 g Protein - Per 55 g Serving • 100% Whole Grains • No Added Sugar • Just Add Water                                                 ','3',"Images/vegan2.jpg" )
,('Peanut Butter',42,'vegan','  Made with USA Grown Peanuts • Certified Vegan • Certified Gluten Free • Non GMO Project Verified • Simple Honest Ingredients • Peanut Butter Blended with Crunchy, Chopped ','4',"Images/vegan1.jpg")
,('Brownie Brittle',25,'vegan','    Rich Brownie Taste With A Cookie Crunch!® • Kosher Dairy • Per 1 oz Serving - 120 Calories • 0 g Trans Fat • 4.5 g Total Fat','5',"Images/vegan3.jpg" )
,('Kelp Noodles',26,'vegan','     Contains No Preservatives • Versatile • Easy to Prepare • Ready to Eat • Neutral Taste • Low Carb • Low Calorie • Gluten-Free • Fat Free • Mineral-Rich','6',"Images/vegan4.jpg")
,('Nutpods ',23,'Nondairy','    nutpods Caramel Coffee Creamer - Unsweetened Non Dairy Creamer Made from Almonds and Coconuts','7',"Images/NonDairy1.jpg")
,('Almond milk ',25,'Nondairy','     Roasted Almond Drink Original Almond drink with added calcium and vitamins','8',"Images/NonDairy2.jpg" )
,('Chocolate Cake Mix ',38,'gluteenfree',' 100% Employee Owned Perfectly Decadent Moist & Rich  Great For Cupcakes  Kosher Non GMO Project Verified  Certified Gluten Free by GFCO  Certified B Corporation  Non-Dairy ','9',"Images/gluteen-free1.jpg")
,('Gluten Free All-Purpose Baking Mix ',44,'   gluteenfree','100% Employee Owned Perfect for Pancakes, Biscuits Fortified with Calcium, Iron & Vitamin B Kosher 50%+ Whole Grain - 20g or More Per Serving 50% or More Of The Grain is Whole Grain Non GMO Project Verified Certified B Corporation Baking with Joy Since 1790 Non Dairy Certified Gluten Free by GFCO','10',"Images/gluteen-free2.jpg");

