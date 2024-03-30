document
  .getElementById("myButton")
  .addEventListener(
    "click",
    () => (document.getElementById("berubah").innerHTML = "AKU MW")
  );

  let siswa = ["JIlong", "ALUCROT", "THAMUZ", "MINTOOD"];
  let siswa_baru = ["EMAN", "PERIDINAN"]

  console.log (siswa)
  siswa = [...siswa, ...siswa_baru]
  console.log (siswa)
