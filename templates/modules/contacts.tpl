<div class="cl-pane-content contacts">
    <div class="right-block social-block">
        {include file="include/common/twitter.tpl"}
    </div>

    <div class="contact-info">
        <span class="big">Организация концертов</span>
        <span class="orange">+7 (925)</span> <span>765-43-21</span>
        Концертный директор Сатлер Светлана
    </div>

    <div class="social-block-small">
        <p>Социальные сети</p>

        <span class="footer-social">
            <a class="fb" href="#"></a>
            <a class="vk" href="#"></a>
            <a class="tw" href="#"></a>
        </span>
    </div>

    <div class="contact-form">
        <h2>Написать письмо*</h2>

        <div class="form-message"></div>

        <div class="disclaimer">
            * Здесь принимаются только рабочие и творческие предложения. Эта форма сделана для вашего удобства, друзья.
        </div>

        <form action="/send.php" id="contact-form" method="post">
            <input type="text" placeholder="Ваше имя" name="name" id="form-name" />
            <input type="email" placeholder="Электронная почта" name="email" id="form-email"/>
            <textarea placeholder="Сообщение" id="form-message" name="message"></textarea>

            <input class="float-right" type="submit" value="Отправить"/>
        </form>
    </div>
</div>