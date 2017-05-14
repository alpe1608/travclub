<?php
use yii\helpers\Html;
Use app\assets\AppAsset;

AppAsset::register($this);
?>
<?= Html::encode($this->title) ?>

<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/1400-180-text.png);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="index.html" class="home">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
            <h1 class="heading_primary">Typography</h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 alignleft">
                    <div class="post_list_inner_content_unit">
                        <div class="post_list_item_excerpt">

                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th class="thfirst">ტერმინები</th>
                                        <th>ახსნა</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="2" class="room">სასტუმროს შენობის ტიპები</td>
                                    </tr>
                                    <tr>
                                        <td>MB (Main Building)</td>
                                        <td>ძირითადი (მთავარი) შენობა</td>
                                    </tr>
                                    <tr>
                                        <td>NB (New Building)</td>
                                        <td>ახალი კორპუსი</td>
                                    </tr>
                                    <tr>
                                        <td>AN (Annex)</td>
                                        <td>დამატებითი კორპუსი</td>
                                    </tr>
                                    <tr>
                                        <td>BGLW/BGL/BG (Bungalo)</td>
                                        <td>ბუნგალო; ძირითადი კორპუსისაგან განცალკევებით მდგომი შენობა</td>
                                    </tr>
                                    <tr>
                                        <td>Villa</td>
                                        <td>ვილლა; განცალკევებით მდგარი სახლი, რომელსაც აქვს უპირატესობა სხვა ტიპის სასტუმრო შენობებთან შედარებით (ორი სართული, დამატებითი სააბაზანო, საკუთარი ბაღი, აუზი, დიდი მინდორი, სხვა ტურისტებისაგან განცალკევებულად დასვენების საშუალება)</td>
                                    </tr>
                                    <tr>
                                        <td>HV (Holiday Village)</td>
                                        <td>ოტელი, რომელიც მოიცავს ბუნგალოების კომპლექს (ცალკე მდგომ სახლებს); მომსახურების პაკეტის მიხედვით განასხვავებენ HV-1 და HV-2 </td>
                                    </tr>
                                    <tr>
                                        <td>Cabana</td>
                                        <td>ბუნგალოს მსგავსი ცალკე მდგომი შენობა, რომელიც განთავსებულია სანაპიროზე ან აუზის მახლობლად და ზოგ შემთხვევაში საძინებლ ოთახს წარმოადგენს</td>
                                    </tr>
                                    <tr>
                                        <td>Chalet</td>
                                        <td>"მეცხვარის ქოხი", ძირითადი კორპუსისაგან ცალკე მდგომი შვეიცარიული ტიპის კოტეჯი</td>
                                    </tr>
                                    <tr>
                                        <td>Executive floor</td>
                                        <td>ერთი ან რამოდენიმე სართული სასტუმროში, რომელიც მომსახურების გაცილებით მაღალი დონით გამოირჩევა</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="room">სასტუმროს ნომრების კლასიფიკატორი</td>
                                    </tr>
                                    <tr>
                                        <td>APT (Appartment)</td>
                                        <td>ნომერი (აპარტამენტი), რომელიც თავისი აღჭურვილობით ახლოსაა საცხოვრებელ ბინასთან. გააჩნია საკუთარი სამზარეულო: ელექტროქურა, ჩაიდანი, სამზარეულო ჭურჭლის კომპლექტი და ა. შ. </td>
                                    </tr>
                                    <tr>
                                        <td>1 BDRM (1 Bedroom)</td>
                                        <td>აპარტამენტი ერთი საძინებელი ოთახით</td>
                                    </tr>
                                    <tr>
                                        <td>2 BDRM (2 Bedroom)</td>
                                        <td>აპარტამენტი ორი საძინებელი ოთახით</td>
                                    </tr>
                                    <tr>
                                        <td>Balcony Room</td>
                                        <td>აივნიანი ნომერი</td>
                                    </tr>
                                    <tr>
                                        <td>Connected Rooms</td>
                                        <td>ნომრები, რომლებიც ერთმანეთთანაა დაკავშირებული</td>
                                    </tr>
                                    <tr>
                                        <td>Duplex</td>
                                        <td>ორსართულიანი ნომერი</td>
                                    </tr>
                                    <tr>
                                        <td>DeLuxe</td>
                                        <td>მაღალი დონის კომფორტული ნომერი, რომელიც Superior-ზე უფრო დიდია</td>
                                    </tr>
                                    <tr>
                                        <td>Family Room</td>
                                        <td>საოჯახო ტიპის ნომერი, რომელიც საკმაოდ ტევადია (გათვლილია 4-სა და მეტ ადამიანზე) და როგორც წესი შედგება რამოდენიმე ოთახისაგან</td>
                                    </tr>
                                    <tr>
                                        <td>STND/STD (Standart)</td>
                                        <td>სტანდარტული ნომერი</td>
                                    </tr>
                                    <tr>
                                        <td>Studio</td>
                                        <td>ერთოთახიანი ნომერი, ხშირად სამზარეულოთი აღჭურვილი</td>
                                    </tr>
                                    <tr>
                                        <td>Suite</td>
                                        <td>მაღალი დონის კომფორტული ნომერი, რომელსაც საკუთარი დასვენების ზონა გააჩნია</td>
                                    </tr>
                                    <tr>
                                        <td>Mini Suite</td>
                                        <td>გაუმჯობესებული კატეგორიის ნომერი (უკეთესი ვიდრე Superior)</td>
                                    </tr>
                                    <tr>
                                        <td>Junior Suite</td>
                                        <td>კომფორტული ნომერი, დიდი ზომის ოთახი, რომელიც შესაძლებელია გამოიყენო, როგორც საძინებელ, ასევე მისაღებ ოთახად </td>
                                    </tr>
                                    <tr>
                                        <td>Senior Suite</td>
                                        <td>კომფორტული ნომერი, რომელშიც განთავსებულია ორი ოთახი, საძინებელი და მისაღები</td>
                                    </tr>
                                    <tr>
                                        <td>Executive Suite</td>
                                        <td>კომფორტული ნომერი, შემდგარი ორი მეტი ოთახისაგან</td>
                                    </tr>
                                    <tr>
                                        <td>King Suite</td>
                                        <td>Suite, მოიცავს ორ საძინებელს, მისაღებს, შეხვედრების (მოლაპარაკების გასამართი) ან სამუშაო კაბინეტს </td>
                                    </tr>
                                    <tr>
                                        <td>Superior</td>
                                        <td>ნომერი, რომელიც სტანდარტულზე უფრო დიდია</td>
                                    </tr>
                                    <tr>
                                        <td>Honeymoon Room</td>
                                        <td>ნომერი ახალდაქორწინებულთათვის, დიდი საწოლითა და მათთვის განკუთვნილი საჩუქრით</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="room">სასტუმროს ნომრების კლასიფიკატორი</td>
                                    </tr>
                                    <tr>
                                        <td>SGL</td>
                                        <td>ერთადგილიანი ნომერი</td>
                                    </tr>
                                    <tr>
                                        <td>DBL (Double)</td>
                                        <td>ორადგილიანი ნომერი ერთი დიდი საწოლით</td>
                                    </tr>
                                    <tr>
                                        <td>TWIN</td>
                                        <td>ორადგილიანი ნომერი ორი განცალკევებული საწოლით</td>
                                    </tr>
                                    <tr>
                                        <td>TRIPL</td>
                                        <td>სამადგილიანი ნომერი</td>
                                    </tr>
                                    <tr>
                                        <td>EXB (extra bed)</td>
                                        <td>დამატებითი საწოლი</td>
                                    </tr>
                                    <tr>
                                        <td>CHD</td>
                                        <td>12 წლამდე ასაკის ბავშვი</td>
                                    </tr>
                                    <tr>
                                        <td>INF (infant)</td>
                                        <td>2 წლამდე ასაკის ბავშვი</td>
                                    </tr>
                                    <tr>
                                        <td>BO (bed only), RO</td>
                                        <td>ნომერში დაბინავება კვების გარეშე</td>
                                    </tr>
                                    <tr>
                                        <td>SGL + CHD (2-6)</td>
                                        <td>1 ზრდასრული და ბავშვი, 2-დან 6 წლამდე</td>
                                    </tr>
                                    <tr>
                                        <td>DBL + 2 CHD (2-6) (6-12)</td>
                                        <td>2 ზრდასრული და 2 ბავშვი, პირველი 2-დან 6, ხოლო მეორე 6-დან 12 წლამდე</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="widget-area col-sm-3 align-left">
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/260-250-text.png" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/260-330-text.png" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/260-290-text.png" alt="">
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>