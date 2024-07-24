document.addEventListener('DOMContentLoaded', function () {




  const checkinInput = document.getElementById('checkin');
  const checkoutInput = document.getElementById('checkout');
  const stayDurationElement = document.getElementById('stay-duration');
  const stayPriceElement = document.getElementById('stay-price');
  const cleanNameElement = document.getElementById('clean-name');
  const cleanPriceElement = document.getElementById('clean-price');
  const totalPriceElement = document.getElementById('total-price');
  const guestsInput = document.getElementById('guests');
  const numberOfGuests = parseInt(guestsInput.value, 10);
  const pricePerNightElement = document.getElementById('price');
  const pricePerNight = parseInt(pricePerNightElement.textContent.replace(/[^0-9]/g, ''), 10);
  const cleanPrice = 20

  // 現在の日付を取得し、チェックインの最小日付に設定
  const today = new Date().toISOString().split('T')[0];
  checkinInput.setAttribute('min', today);

  // チェックアウトの最小日付を初期化
  const tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1);
  checkoutInput.setAttribute('min', tomorrow.toISOString().split('T')[0]);

  function dateChange () {
      // チェックイン日を取得
      const checkinDate = new Date(this.value);
      // チェックイン日の次の日を計算
      checkinDate.setDate(checkinDate.getDate() + 1);
      // チェックアウトの最小日付に設定
      checkoutInput.setAttribute('min', checkinDate.toISOString().split('T')[0]);
  };

  if( checkinInput && checkoutInput){

    function calculateStay() {
      const checkinDate = new Date(checkinInput.value);
    const checkoutDate = new Date(checkoutInput.value);
    const numberOfGuests = new Date(checkoutInput.value);
    
     // チェックイン日とチェックアウト日が正しいか確認
     
     const diffTime = Math.abs(checkoutDate - checkinDate);
     const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
     
     const stayPrice = numberOfGuests * pricePerNight;
     const totalPricePerNight = stayPrice * diffDays
     const totalPrice = stayPrice + cleanPrice;

     stayDurationElement.textContent = `$${pricePerNight} × ${diffDays}泊`;
     stayPriceElement.textContent = `$${totalPricePerNight}`;
     cleanNameElement.textContent = `clean price`;
     cleanPriceElement.textContent = `$${cleanPrice}`;
     totalPriceElement.textContent = `$${totalPrice}`;
    }
    
  }

  checkinInput.addEventListener('change', dateChange);
  checkoutInput.addEventListener('change', dateChange);
  checkinInput.addEventListener('change', calculateStay);
  checkoutInput.addEventListener('change', calculateStay);
  numberOfGuests.addEventListener('change', calculateStay);


});


