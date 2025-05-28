<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dishes')->insert([
            ['dishName' => 'Aji de Gallina', 'price' => 12.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'Aji-de-Gallina-Peruano.jpg', 'details' => ''],
            ['dishName' => 'Caldo de Gallina', 'price' => 20.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://comidasperuanas.com.pe/wp-content/uploads/2023/05/caldo_de_gallina.jpg', 'details' => ''],
            ['dishName' => 'Limonada Azul', 'price' => 12.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://img.freepik.com/foto-gratis/vista-frontal-limonada-fresca-fresca-dentro-vaso-pequeno-hielo-sobre-fondo-azul-agua-jugo-frio-coctel-barra-color-bebida-fruta_140725-157069.jpg', 'details' => 'Jar of 1 liter, Ingredients: Lemon and Blueberry'],
            ['dishName' => 'Cesar Salad', 'price' => 10.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://feelgoodfoodie.net/wp-content/uploads/2020/04/Caesar-Salad-TIMG.jpg', 'details' => 'Ingredients: Lettuce, olive oil, eggs, garlic, mustard, parmesan'],
            ['dishName' => 'Blueberry Juice', 'price' => 15.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://nurturedhomes.com/wp-content/uploads/2022/08/blueberry-juice-5.jpg', 'details' => 'Jar of 1 liter'],
            ['dishName' => 'Pancake', 'price' => 10.00, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Foodiesfeed.com_pouring-honey-on-pancakes-with-walnuts.jpg', 'details' => '6 Pancakes with mapple honey'],
            ['dishName' => 'Personal Healthy Pizza', 'price' => 10.00, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://i.ytimg.com/vi/1ynmekEk9y4/maxresdefault.jpg', 'details' => 'The base of the pizza is made with oat, not with flour'],
            ['dishName' => 'Chocolate Cake', 'price' => 8.50, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/291528/pexels-photo-291528.jpeg', 'details' => 'Rich chocolate cake with dark chocolate ganache'],
            ['dishName' => 'Strawberry Cheesecake', 'price' => 9.00, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/1126359/pexels-photo-1126359.jpeg', 'details' => 'Creamy cheesecake with fresh strawberries and syrup'],
            ['dishName' => 'Apple Pie', 'price' => 7.00, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/3065590/pexels-photo-3065590.jpeg', 'details' => 'Classic apple pie with a buttery crust'],
            ['dishName' => 'Tiramisu', 'price' => 10.00, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31238979/pexels-photo-31238979.jpeg', 'details' => 'Italian coffee-flavored dessert with mascarpone'],
            ['dishName' => 'Crepes with Nutella', 'price' => 8.00, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/6413700/pexels-photo-6413700.jpeg', 'details' => 'Thin crepes filled with Nutella and bananas'],
            ['dishName' => 'Red Velvet Cake', 'price' => 9.50, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/806363/pexels-photo-806363.jpeg', 'details' => 'Moist red velvet cake with cream cheese frosting'],
            ['dishName' => 'Mango Mousse', 'price' => 7.50, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/2536967/pexels-photo-2536967.jpeg', 'details' => 'Light and fluffy mango mousse'],
            ['dishName' => 'Chocolate Brownie', 'price' => 6.00, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31228825/pexels-photo-31228825.jpeg', 'details' => 'Fudgy chocolate brownie with walnuts'],
            ['dishName' => 'Vanilla Ice Cream', 'price' => 5.00, 'idCategory' => 1, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg', 'details' => 'Classic vanilla ice cream with a smooth texture'],
            ['dishName' => 'Churros with Chocolate', 'price' => 8.00, 'idCategory' => 1, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/5255956/pexels-photo-5255956.jpeg', 'details' => 'Crispy churros served with hot chocolate sauce'],
            ['dishName' => 'Mango Smoothie', 'price' => 12.00, 'idCategory' => 2, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/4443497/pexels-photo-4443497.jpeg', 'details' => 'Jar of 1 liter, Ingredients: Mango, yogurt, and honey'],
            ['dishName' => 'Iced Coffee', 'price' => 10.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/1193335/pexels-photo-1193335.jpeg', 'details' => 'Chilled coffee with milk and ice'],
            ['dishName' => 'Pineapple Juice', 'price' => 14.00, 'idCategory' => 2, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/5337509/pexels-photo-5337509.jpeg', 'details' => 'Freshly squeezed pineapple juice'],
            ['dishName' => 'Matcha Latte', 'price' => 15.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31214053/pexels-photo-31214053.jpeg', 'details' => 'Japanese green tea latte with almond milk'],
            ['dishName' => 'Strawberry Shake', 'price' => 11.00, 'idCategory' => 2, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/103566/pexels-photo-103566.jpeg', 'details' => 'Fresh strawberry shake with whipped cream'],
            ['dishName' => 'Coconut Water', 'price' => 9.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/1917838/pexels-photo-1917838.jpeg', 'details' => 'Pure coconut water served chilled'],
            ['dishName' => 'Peach Iced Tea', 'price' => 13.00, 'idCategory' => 2, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/25113739/pexels-photo-25113739.jpeg', 'details' => 'Refreshing peach-infused iced tea'],
            ['dishName' => 'Watermelon Juice', 'price' => 12.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/1337825/pexels-photo-1337825.jpeg', 'details' => 'Jar of 1 liter, made with fresh watermelon'],
            ['dishName' => 'Cold Brew Coffee', 'price' => 14.00, 'idCategory' => 2, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/2067404/pexels-photo-2067404.jpeg', 'details' => 'Smooth, low-acid cold brew coffee'],
            ['dishName' => 'Orange Juice', 'price' => 10.00, 'idCategory' => 2, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/158053/fresh-orange-juice-squeezed-refreshing-citrus-158053.jpeg', 'details' => 'Freshly squeezed orange juice, no added sugar'],
            ['dishName' => 'Grilled Chicken', 'price' => 20.00, 'idCategory' => 3, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/106343/pexels-photo-106343.jpeg', 'details' => 'Grilled chicken breast with herbs and spices'],
            ['dishName' => 'Steak with Garlic Butter', 'price' => 25.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/6378664/pexels-photo-6378664.jpeg', 'details' => 'Juicy steak with garlic butter sauce'],
            ['dishName' => 'Spaghetti Carbonara', 'price' => 18.00, 'idCategory' => 3, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/12918198/pexels-photo-12918198.jpeg', 'details' => 'Classic Italian pasta with bacon and cheese'],
            ['dishName' => 'Grilled Salmon', 'price' => 22.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31235406/pexels-photo-31235406.jpeg', 'details' => 'Salmon fillet grilled to perfection'],
            ['dishName' => 'Stuffed Peppers', 'price' => 17.00, 'idCategory' => 3, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/5975429/pexels-photo-5975429.jpeg', 'details' => 'Bell peppers stuffed with ground beef and rice'],
            ['dishName' => 'BBQ Ribs', 'price' => 26.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg', 'details' => 'Tender BBQ ribs with homemade sauce'],
            ['dishName' => 'Chicken Alfredo Pasta', 'price' => 19.00, 'idCategory' => 3, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/13294544/pexels-photo-13294544.jpeg', 'details' => 'Creamy Alfredo pasta with grilled chicken'],
            ['dishName' => 'Tuna Steak', 'price' => 23.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/4870430/pexels-photo-4870430.jpeg', 'details' => 'Seared tuna steak with soy sauce glaze'],
            ['dishName' => 'Vegetable Stir-Fry', 'price' => 15.00, 'idCategory' => 3, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/31236608/pexels-photo-31236608.jpeg', 'details' => 'Mixed vegetables stir-fried with soy sauce'],
            ['dishName' => 'Shrimp Tacos', 'price' => 20.00, 'idCategory' => 3, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/4609255/pexels-photo-4609255.jpeg', 'details' => 'Soft tacos filled with spicy shrimp and avocado'],
            ['dishName' => 'Greek Salad', 'price' => 10.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/1211887/pexels-photo-1211887.jpeg', 'details' => 'Ingredients: Cucumber, tomato, red onion, feta cheese, olives'],
            ['dishName' => 'Caprese Salad', 'price' => 12.00, 'idCategory' => 4, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/28594604/pexels-photo-28594604.jpeg', 'details' => 'Tomatoes, mozzarella, basil, and balsamic glaze'],
            ['dishName' => 'Avocado Salad', 'price' => 14.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/31235449/pexels-photo-31235449.jpeg', 'details' => 'Avocado, cherry tomatoes, red onion, lemon dressing'],
            ['dishName' => 'Waldorf Salad', 'price' => 13.00, 'idCategory' => 4, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/3045332/pexels-photo-3045332.jpeg', 'details' => 'Apples, grapes, walnuts, celery, and mayonnaise'],
            ['dishName' => 'Quinoa Salad', 'price' => 15.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/31235446/pexels-photo-31235446.jpeg', 'details' => 'Quinoa, cucumber, red bell pepper, feta, and lemon dressing'],
            ['dishName' => 'Asian Chicken Salad', 'price' => 16.00, 'idCategory' => 4, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31214057/pexels-photo-31214057.jpeg', 'details' => 'Grilled chicken, cabbage, carrots, sesame dressing'],
            ['dishName' => 'Fruit Salad', 'price' => 9.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/1132047/pexels-photo-1132047.jpeg', 'details' => 'Mixed fresh fruits with a citrus dressing'],
            ['dishName' => 'Kale Salad', 'price' => 14.00, 'idCategory' => 4, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/5755904/pexels-photo-5755904.jpeg', 'details' => 'Kale, almonds, cranberries, parmesan'],
            ['dishName' => 'Cobb Salad', 'price' => 17.00, 'idCategory' => 4, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/4869429/pexels-photo-4869429.jpeg', 'details' => 'Lettuce, grilled chicken, avocado, bacon, egg, blue cheese'],
            ['dishName' => 'Mediterranean Salad', 'price' => 15.00, 'idCategory' => 4, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31235435/pexels-photo-31235435.jpeg', 'details' => 'Cucumber, tomato, olives, feta, lemon dressing'],
            ['dishName' => 'Chicken Noodle Soup', 'price' => 12.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/28872869/pexels-photo-28872869.jpeg', 'details' => 'Classic chicken noodle soup with carrots and celery'],
            ['dishName' => 'Minestrone Soup', 'price' => 14.00, 'idCategory' => 5, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31236419/pexels-photo-31236419.jpeg', 'details' => 'Italian vegetable soup with beans and pasta'],
            ['dishName' => 'Lentil Soup', 'price' => 11.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/539451/pexels-photo-539451.jpeg', 'details' => 'Hearty lentil soup with tomatoes and carrots'],
            ['dishName' => 'Tomato Basil Soup', 'price' => 13.00, 'idCategory' => 5, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/4871275/pexels-photo-4871275.jpeg', 'details' => 'Creamy tomato soup with fresh basil'],
            ['dishName' => 'Clam Chowder', 'price' => 16.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/27821123/pexels-photo-27821123.jpeg', 'details' => 'New England-style clam chowder with potatoes'],
            ['dishName' => 'French Onion Soup', 'price' => 14.00, 'idCategory' => 5, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/5038909/pexels-photo-5038909.jpeg', 'details' => 'Caramelized onions with a toasted cheese topping'],
            ['dishName' => 'Butternut Squash Soup', 'price' => 13.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/5605570/pexels-photo-5605570.jpeg', 'details' => 'Creamy roasted butternut squash soup'],
            ['dishName' => 'Beef Stew', 'price' => 18.00, 'idCategory' => 5, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/2313686/pexels-photo-2313686.jpeg', 'details' => 'Slow-cooked beef stew with potatoes and carrots'],
            ['dishName' => 'Pho', 'price' => 17.00, 'idCategory' => 5, 'status' => 1, 'dishImg' => 'https://images.pexels.com/photos/98874/pexels-photo-98874.jpeg', 'details' => 'Vietnamese noodle soup with beef and herbs'],
            ['dishName' => 'Miso Soup', 'price' => 10.00, 'idCategory' => 5, 'status' => 0, 'dishImg' => 'https://images.pexels.com/photos/31214055/pexels-photo-31214055.jpeg', 'details' => 'Traditional Japanese miso soup with tofu and seaweed'],
        ]);
    }
}
