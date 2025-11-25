document.addEventListener("DOMContentLoaded", function () {
  const siteKey = "6Le4chMsAAAAAIPA3uk1d577uu-Tmi71vzToPXoO"; // reCAPTCHA 사이트 키

  // ★ 이 스크립트는 frmSendMailForm 이 있을 때만 동작
  const form = document.getElementById("frmSendMailForm");
  if (!form) return;

  const tokenInput = form.querySelector("#g-recaptcha-response");
  const submitBtn = form.querySelector("#submitBtn");
  const btnLabel = submitBtn ? submitBtn.querySelector(".btn-label") : null;
  const btnSpinner = submitBtn ? submitBtn.querySelector(".btn-spinner") : null;

  // form 의 target 속성으로 연결된 iframe만 찾기
  const targetName = form.getAttribute("target");
  const iframe = targetName ? document.querySelector('iframe[name="' + targetName + '"]') : null;

  if (!tokenInput || !submitBtn || !btnLabel || !btnSpinner || !iframe) {
    console.error("frmSendMailForm: needed elements not found");
    return;
  }

  const originalLabel = btnLabel.textContent;

  function setLoading(on) {
    if (on) {
      submitBtn.disabled = true;
      submitBtn.classList.add("is-loading");
      btnLabel.textContent = "Loading...";
    } else {
      submitBtn.disabled = false;
      submitBtn.classList.remove("is-loading");
      btnLabel.textContent = originalLabel;
    }
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // 바로 전송 막고, 먼저 유효성 검사

    // ---- 필수값 검사 (이 폼 안에서만) ----
    const nameInput = form.querySelector('input[name="cs_name"]');
    const emailInput = form.querySelector('input[name="cs_email"]');
    const phoneInput = form.querySelector('input[name="cs_phoneNumber"]');
    const messageInput = form.querySelector('textarea[name="cs_message"]');

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const phone = phoneInput.value.trim();
    const message = messageInput.value.trim();

    if (!name) {
      alert("Please enter your name.");
      nameInput.focus();
      return;
    }

    if (!email) {
      alert("Please enter your email address.");
      emailInput.focus();
      return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      emailInput.focus();
      return;
    }

    if (!phone) {
      alert("Please enter your contact number.");
      phoneInput.focus();
      return;
    }

    if (!message) {
      alert("Please enter your message.");
      messageInput.focus();
      return;
    }
    // ---- 유효성 검사 끝 ----

    setLoading(true);

    if (!window.grecaptcha || !grecaptcha.enterprise) {
      console.error("reCAPTCHA Enterprise is not loaded.");
      alert("Security check failed. Please try again later.");
      setLoading(false);
      return;
    }

    grecaptcha.enterprise.ready(function () {
      grecaptcha.enterprise
        .execute(siteKey, { action: "contact_form" })
        .then(function (token) {
          tokenInput.value = token; // 토큰 세팅
          form.submit(); // 타겟 iframe 으로 전송
        })
        .catch(function (err) {
          console.error("reCAPTCHA error:", err);
          alert("Security check failed. Please try again later.");
          setLoading(false);
        });
    });
  });

  // 이 폼의 target iframe 에서만 응답 처리
  iframe.addEventListener("load", function () {
    // 버튼이 로딩 상태가 아닐 때(처음 빈 로드 등)는 무시
    if (!submitBtn.classList.contains("is-loading")) {
      return;
    }

    let bodyText = "";
    try {
      const doc = iframe.contentDocument || iframe.contentWindow.document;
      bodyText = doc && doc.body ? doc.body.textContent.trim() : "";
    } catch (e) {
      console.error("Unable to read iframe response:", e);
    }

    const lower = bodyText.toLowerCase();
    const isSuccess = lower.includes("success");

    if (isSuccess) {
      form.reset();
      tokenInput.value = "";
      alert(bodyText || "Your message has been sent successfully.");
    } else {
      if (bodyText) {
        alert(bodyText);
      } else {
        alert("Failed to send message. Please try again later.");
      }
    }

    setLoading(false);
  });
});
