<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>

<body>

    <div class="container">
        <h1>Customer Reviews</h1>
        <div class="reviews">
            <div class="review">
                <div class="customer-info">
                    <img src="data:image/jpeg;base64,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" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Rohit</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
                <p class="message">
                    "Had an amazing time at AIT Restaurant. Impeccable service, cozy ambiance, and dishes that were both delicious and beautifully presented. The Masala Dosa is a must-try! Though slightly pricey, the overall experience makes it worth every penny. Can't wait to return for another delightful meal. "
                </p>
            </div>


            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXXtefAw0UjoTNawuTR5ZyLIzBoYrwCxPjZA&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Sunita Chauhan</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>

                        </div>
                    </div>
                </div>
                <p class="message">
                    "Dined at AIT Restaurant and was blown away. Exceptional service, a charming atmosphere, and dishes that redefine taste. The chef's creativity shines in every bite. Pricey but worth it for the exquisite experience. A must-visit for food enthusiasts. Can't recommend it enough!" </p>
            </div>


            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9Tyj3xMVWI148t7-16dSXwozzQgXHabYuIQ&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Shubham Singh</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
                <p class="message">
                    "AIT Restaurant is a hidden gem! Impeccable service, inviting ambiance, and the menu is a gastronomic delight. The fusion of flavors in their dishes, especially the Masala Dosa, is unparalleled. While prices lean towards the higher side, the extraordinary culinary experience justifies every penny. AIT is now my go-to for a memorable dining experience."
                </p>
            </div>



            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvUt3pp62CFn9HBMWdONxLgX0rDceeGLYOxw&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Ayush </h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>

                        </div>
                    </div>
                </div>
                <p class="message">
                    "AIT Restaurant is a culinary masterpiece. The ambiance is chic, service top-notch, and the menu is a journey of taste. The Butter Chicken is a revelation. Though prices are a bit steep, the impeccable flavors and dining experience make it a worthwhile indulgence. AIT has secured its spot as my favorite dining destination."
                </p>
            </div>


            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV0ZU_IkGwQaYy7_QsRKdqP3OKZNkH0t_-vg&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Prashant</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
                <p class="message">
                    "AIT exceeded expectations! From the warm welcome to the last bite, it was flawless. The eclectic menu, especially the Rogan Josh, is a taste sensation. The atmosphere is cozy, service is exceptional, though prices are a tad high, the culinary journey is worth every dime. AIT, where every meal is a celebration."
                </p>
            </div>

            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiVlLKimJM9biYP6dzIACJGCyjINkj3xXX0Q&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Akshay kumar</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
                <p class="message">
                    "AIT is a culinary haven! The ambiance radiates sophistication, service is impeccable, and each dish is a masterpiece. The Tandoori Chicken is a symphony of flavors. While prices lean towards the higher side, the gastronomic adventure makes it a worthwhile splurge. AIT, where passion for food meets perfection"
                </p>
            </div>

            <div class="review">
                <div class="customer-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaxR3IcTEooIyit3bzjEPMM0ZcvUblifyRag&usqp=CAU" alt="Customer 1">
                    <div class="customer-details">
                        <h2>Anamika</h2>
                        <div class="stars">
                            <!-- Stars out of 5 -->
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>

                        </div>
                    </div>
                </div>
                <p class="message">
                    "AIT is a flavor paradise! The ambiance is stylish, service is exceptional, and the menu boasts innovative delights. The Butter Chicken is a taste revelation. Though prices are on the higher side, the culinary journey is an investment in sheer delight. AIT, my go-to for an unforgettable dining escapade! "
                </p>
            </div>

        </div>
    </div>

</body>

</html>