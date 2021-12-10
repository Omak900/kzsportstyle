<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=contain"
    />
    <link
      rel="shortcut icon"
      href="fpublic/img/not_main/favicon.ico"
      type="image/x-icon"
    />
    <title>Parimatch. Играют они – побеждаешь ты!</title>
    <link rel="stylesheet" href="public/css/style.min%EF%B9%96v=2.css" />

    <meta name="robots" content="noindex, nofollow" />
    <!-- Google Tag Manager RU-->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-KMWKXFD");
    </script>
    <!-- End Google Tag Manager -->
    <!-- START script -->
    <script src="https://start.parimatch.ru/fpapi/s.js" async></script>
    <!-- END script -->
  </head>

  <body>
    <script>
      !(function (a, b, c, d, e, f) {
        a.ddjskey = e;
        a.ddoptions = f || null;
        var m = b.createElement(c),
          n = b.getElementsByTagName(c)[0];
        (m.async = 1), (m.src = d), n.parentNode.insertBefore(m, n);
      })(
        window,
        document,
        "script",
        "https://js.datadome.co/tags.js",
        "8C3B447B229E3576822D6D36561F42",
        { ajaxListenerPath: ["parimatch.ru"] }
      );
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-KMWKXFD"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script src="https://start.parimatch.ru/mtapi/js/build/framework.min.js?v=1.0.2"></script>
    <script>
      if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
      ) {
        setTimeout(function () {
          if (
            typeof MTFEF !== "undefined" &&
            typeof MTFEF.init !== "undefined"
          ) {
            MTFEF.init();
          }
        }, 10);
      } else {
        document.addEventListener("DOMContentLoaded", function () {
          if (
            typeof MTFEF !== "undefined" &&
            typeof MTFEF.init !== "undefined"
          ) {
            MTFEF.init();
          }
        });
      }
    </script>
    <script>
      function findGetParameter(e) {
        var t = null,
          n = [];
        return (
          location.search
            .substr(1)
            .split("&")
            .forEach(function (r) {
              if ((n = r.split("="))[0] === e)
                if (n.hasOwnProperty(1))
                  try {
                    t = n.hasOwnProperty(1) ? decodeURIComponent(n[1]) : "";
                  } catch (e) {
                    t = "";
                  }
                else t = "";
            }),
          t
        );
      }
      function insertParam(e, t, n) {
        var r = new URL(n),
          a = r.search,
          o = new URLSearchParams(a);
        return o.set(e, t), (r.search = o.toString()), r.toString();
      }
      function insertRegBonus(e) {
        var t = window.nnbonus || "",
          n = new URL(e);
        return t ? insertParam("regBonus", t, e) : n;
      }
      function manageLinks() {
        let e = document.getElementsByTagName("a");
        Array.prototype.forEach.call(e, function (e) {
          let t = e.getAttribute("href");
          "string" != typeof t ||
            t.startsWith("#") ||
            ([
              "start.",
              "promo.",
              "faq.",
              "expertua.",
              "concierge.",
              "news.",
              "info.",
              "tickets.",
              "bloggers.",
            ].forEach(function (t) {
              if (document.domain === t + document.domain.replace(t, "")) {
                var n = document.domain.replace(t, "");
                e.href = e.href
                  .replace("parimatch.com", n)
                  .replace("pari-match.com", n);
              }
            }),
            [
              "adtag",
              "btag",
              "qtag",
              "siteid",
              "utm",
              "utm_source",
              "utm_medium",
              "utm_campaign",
              "utm_content",
              "utm_term",
            ].forEach(function (t) {
              null !== findGetParameter(t) &&
                (e.href = insertParam(t, findGetParameter(t), e.href));
            })),
            t.includes("//nativeapp") ||
              (!t.includes("https://") && !t.includes("http://")) ||
              (e.href = insertRegBonus(e.href));
        });
      }
      document.addEventListener("DOMContentLoaded", function () {
        manageLinks();
      });
    </script>

    <div class="body-wrap">
      <div class="header">
        <div class="header__button_wrap">
          <a href="https://leonsport.site/ppcarchive" class="button button--in">
            Вход
          </a>
        </div>
      </div>
      <div class="main__wrap">
        <div class="main"></div>
        <div class="side">
          <div class="steps">
            <div class="steps__item">
              <div class="steps__img">
                <img
                  src="https://start.parimatch.ru/newconor/1000/public/img/steps/1.svg"
                  alt=""
                />
              </div>
              <div class="steps__text">Зарегистрируйся</div>
            </div>
            <div class="steps__item">
              <div class="steps__img">
                <img
                  src="https://start.parimatch.ru/newconor/1000/public/img/steps/2.svg"
                  alt=""
                />
              </div>
              <div class="steps__text">Пополни счёт</div>
            </div>
            <div class="steps__item">
              <div class="steps__img">
                <img
                  src="https://start.parimatch.ru/newconor/1000/public/img/steps/3.svg"
                  alt=""
                />
              </div>
              <div class="steps__text">Получи фрибет</div>
            </div>
          </div>
          <div class="bonus">
            <div class="bonus__freebet">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/freebet.png"
                alt=""
              />
            </div>
            <div class="bonus__num">110000₸</div>
            <div class="bonus__text">
              <div class="bonus__text-first">НОВЫМ КЛИЕНТАМ</div>
              <!-- <div class="bonus__text-second">рублей</div> -->
            </div>
          </div>
          <div class="reg">
            <a class="reg__btn" href="https://leonsport.site/ppcarchive">
              зарегистрироваться
            </a>
            <div class="reg__enter">
              Уже есть аккаунт? <br />
              Жми
              <a href="https://leonsport.site/ppcarchive">Войти</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footer__wrap">
          <div class="payments">
            <div class="payments__item">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/visa.svg"
                alt=""
              />
            </div>
            <div class="payments__item">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/mastercard.svg"
                alt=""
              />
            </div>
            <div class="payments__item">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/qiwi_logo.svg"
                alt=""
              />
            </div>
            <div class="payments__item">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/iomoney.svg"
                alt=""
              />
            </div>
          </div>
          <div class="apps">
            <a class="apps__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/android_download_mono.svg"
                alt=""
              />
            </a>
            <a class="apps__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/appStore.svg"
                alt=""
              />
            </a>
            <a class="apps__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/App_galery.svg"
                alt=""
              />
            </a>
            <a class="apps__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/Galaxy.svg"
                alt=""
              />
            </a>
            <a class="apps__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/xiaomi.svg"
                alt=""
              />
            </a>
          </div>
          <div class="socials">
            <div class="socials__18plus">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/18.svg"
                alt=""
              />
            </div>
            <a class="socials__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/vk.svg"
                alt=""
              />
            </a>
            <a class="socials__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/tw.svg"
                alt=""
              />
            </a>
            <a class="socials__item" href="javascript:void(0);">
              <img
                src="https://start.parimatch.ru/newconor/1000/public/img/not_main/inst.svg"
                alt=""
              />
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://start.parimatch.ru/newconor/1000/public/js/main.min.js"></script>
  </body>
</html>
