const cookieBox = document.querySelector(".wrapper"),
  acceptBtn = cookieBox.querySelector("button");
acceptBtn.onclick = () => {
  document.cookie = "CookieBy=FaridVatani; max-age=" + 60 * 60 * 24 * 30;
  if (document.cookie) {
    cookieBox.classList.add("hide");
  } else {
    alert(
      "Cookie can't be set! Please unblock this site from the cookie setting of your browser."
    );
  }
};
let checkCookie = document.cookie.indexOf("CookieBy=UtruckTeam");
checkCookie != -1
  ? cookieBox.classList.add("hide")
  : cookieBox.classList.remove("hide");