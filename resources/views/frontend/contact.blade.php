@extends('layout.site')
@section('title','Lien he')
@section('maincontent')

<div>
  
    <section id="contact-info">
        <h1 style="text-align: center; padding-top: 20px; font-family: Pacifico, cursive; font-weight: 400; font-style: normal; font-size: 80px;">Liên hệ</h1>
        <div class="contact-container">
            <div class="contact-info-form" style="width: 300px;">
                <div class="contact-info">
                    <div>
                        <span>Địa chỉ:</span> Tòa nhà Ladeco, 266 Đội Cấn, phường Liễu Giai, Quận Ba Đình, Hà Nội
                    </div>
                    <div>
                        <span>Điện thoại:</span> 19006750
                    </div>
                    <div>
                        <span>Email:</span> coolteam@gmail.com
                    </div>
                </div>
                <form class="contact">
                    <h5>Liên hệ với chúng tôi</h5>
                    <label for="name">Họ và tên:</label>
                    <input type="text" id="name" name="name" required>
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
    
                    <label for="message">Nội dung:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
    
                    <input type="submit_contact" value="Gửi">
                </form>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84501.19060003581!2d106.7693651976645!3d10.840650357758575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c2f8f30911%3A0x36ac5073f8c91acd!2sLandmark%2081!5e0!3m2!1sen!2s!4v1714895740900!5m2!1sen!2s" width="100%" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
</div>
@endsection