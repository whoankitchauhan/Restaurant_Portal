<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "jost";
    }

    h2 {
        font-size: 64px;
        font-weight: bold;
        text-transform: uppercase;
        color: #fff;
        text-shadow: 2px 2px 5px #000;
    }

    p {
        font-size: 20px;
        color: #fff;
        padding: 30px;
    }

    section {
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
        text-align: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://media.istockphoto.com/id/1472620857/photo/tasty-butter-chicken-curry-dish-from-indian-cuisine.jpg?s=612x612&w=0&k=20&c=7Lf1Qrwj7sY31LuzbO9u8KMFuoUo96SwOvxz5YL_Slw=);
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-attachment: fixed;
    }

    .section-2 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://t3.ftcdn.net/jpg/00/37/81/84/360_F_37818424_iEAeI3ngDZ3pNwQ8iZvm2AIDzVDRQmhz.jpg);
    }

    .section-3 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://media.istockphoto.com/id/1177712208/photo/kashmiri-lamb-rogan-josh-with-spices-and-gravy-close-up-in-a-pan-horizontal-top-view.jpg?s=612x612&w=0&k=20&c=AxADxxquEy4HD4Cc8l60kUUtTy49to58sq1U2yc27tc=);
    }

    .section-4 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://www.shutterstock.com/image-photo/indian-breakfast-_poori-chickpea-chana-600nw-1949065333.jpg);
    }

    .section-5 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://as1.ftcdn.net/v2/jpg/01/23/30/40/1000_F_123304089_sQzMmNCjPEPbd229NcOzRvx3kWT4Fmrx.jpg);
    }

    .section-6 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://img.freepik.com/free-photo/side-view-baked-chicken-with-cucumber-lemon-seasoning-bread-table_141793-4757.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1700438400&semt=ais);

    }

    .section-7 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://media.istockphoto.com/id/525416827/photo/pani-puri-golgappe-chat-item-india.jpg?s=612x612&w=0&k=20&c=tOCmN28AXHIe3SMBgszWU6PLUD6w6CU6q8yMdwSAKPw=);

    }

    .section-8 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://thumbs.dreamstime.com/b/chicken-dum-biryani-white-bowl-traditional-indian-one-pot-dish-background-high-angle-view-156498926.jpg);

    }

    .section-9 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://t3.ftcdn.net/jpg/03/11/47/60/360_F_311476045_jGMhyPQWbwSkkSi4d0vRI04gZKVEQHdz.jpg);

    }

    .section-10 {
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)),
            url(https://media.istockphoto.com/id/495022082/photo/indian-sweet-rasgulla-is-a-syrupy-dessert-indian-cottage-cheese.jpg?s=612x612&w=0&k=20&c=aiYrqWEJSFnRrhUc0mY53CcJ9KlhkWLEKtnW6ayqOGo=);

    }


    .order-btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #ff9800;
        color: white;
        text-align: center;
        font-size: 24px;
        text-decoration: none;
        border: 2px solid #ff9800;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .order-btn:hover {
        background-color: #ffac33;
        color: #fff;
        transform: scale(1.05);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <section>
        <div>
            <h2>Butter Chicken</h2>
            <p>A creamy and flavorful chicken dish cooked with butter and spices.</p>
            <a href="https://www.zomato.com/ncr/butter-chicken-factory-sector-14/order" target="_blank"> <button class="order-btn">Order</button> </a>
        </div>
    </section>
    <section class="section-2">
        <div>
            <h2>Masala Dosa</h2>
            <p>A South Indian delicacy consisting of a thin, crispy pancake filled with spiced potatoes.</p>
            <a href="https://www.zomato.com/ncr/masala-dosa-paharganj-new-delhi/menu" target="_blank"> <button class="order-btn">Order</button> </a>
        </div>
    </section>
    <section class="section-3">
        <div>
            <h2>Rogan Josh</h2>
            <p>Aromatic lamb curry cooked with various spices, rich in flavors.</p>
            <a href="https://www.zomato.com/rogan-josh-food-truck/order" target="_blank"> <button class="order-btn">Order</button> </a>
        </div>
    </section>
    <section class="section-4">
        <div>
            <h2>Chole Bhature</h2>
            <p>A classic combination of spicy chickpea curry served with fried bread.</p>
            <a href="https://www.zomato.com/ncr/sitaram-ke-special-chole-bhature-azadpur-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-5">
        <div>
            <<h2>Palak Paneer</h2>
                <p>A vegetarian dish made of spinach and paneer (Indian cottage cheese).</p>
                <a href="https://www.zomato.com/ncr/ghar-ka-khana-by-eatfit-tilak-nagar-new-delhi/order" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-6">
        <div>
            <h2>Tandoori Chicken</h2>
            <p>Chicken marinated in yogurt and spices, roasted in a tandoor (clay oven).</p>
            <a href="https://www.zomato.com/ncr/indian-tandoori-chicken-vasundhara-enclave-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-7">
        <div>
            <h2>Pani Puri</h2>
            <p>A popular street food consisting of crispy hollow shells filled with flavored water, potatoes, and chickpeas.</p>
            <a href="https://www.zomato.com/ncr/pani-puri-mayur-vihar-phase-3-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-8">
        <div>
            <h2>Hyderabadi Biryani</h2>
            <p>Fragrant rice dish cooked with meat, spices, and saffron, originating from Hyderabad.</p>
            <a href="https://www.zomato.com/ncr/hyderabadi-biryani-bhawan-rajinder-nagar-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-9">
        <div>
            <h2>Gulab Jamun</h2>
            <p>Deep-fried dumplings soaked in sugar syrup, a popular Indian dessert.</p>
            <a href="https://www.zomato.com/ncr/the-gulab-jamun-cafe-sector-39-gurgaon/order" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
    </section>
    <section class="section-10">
        <div>
            <h2>Rasgulla</h2>
            <p>Soft and spongy balls made from cottage cheese, soaked in sugar syrup.</p>
            <a href="https://www.zomato.com/ncr/the-rasgulla-store-malviya-nagar-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>
        </div>
    </section>
</body>

</html>