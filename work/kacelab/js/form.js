function validateForm(form) {
  const requiredFields = form.querySelectorAll('input[required], textarea[required], select[required]');
  let formIsValid = true;

  requiredFields.forEach(field => {
      if (!field.value.trim()) {
          field.parentElement.classList.add('error');
          formIsValid = false;
      } else {
          field.parentElement.classList.remove('error');
      }
  });

  return formIsValid;
}


// Main
function mainSendMail(form) {
  const isValid = validateForm(form);

  if (!isValid) {
      console.log('필수 입력값 미입력');
      return;
  }

  if (!confirm('메일을 전송하겠습니까?')) return;

  form.submit();
}


// Contact
function sendMail(form) {
  const isValid = validateForm(form);

  if (!isValid) {
      console.log('필수 입력값 미입력');
      return;
  }

  if (!form.term.checked) {
      form.term.classList.add('error');
      alert('개인정보취급방침에 동의해주세요.');
      return;
  }

  if (!confirm('메일을 전송하겠습니까?')) return;

  form.submit();
}


// Counseling
function sendQuestion(form) {
  const isValid = validateForm(form);

  if (!isValid) {
      console.log('필수 입력값 미입력');
      return;
  }

  if (!form.terms.checked) {
      form.terms.classList.add('error');
      alert('개인정보취급방침에 동의해주세요.');
      return;
  }

  if (!confirm('질문을 등록하시겠습니까?')) return;

  form.submit();
}
