const staticDevMuseum = "dev-museum-site-v1"
const assets = [
  "/",
  "/About.php",
  "/css/style.css",
  "/js/app.js",
  "/DaftarMuseum.php",
  "/Detailkoleksi.php",
  "/Koleksimuseum.php",
  "/Koneksi.php",
  "/Gallery.php",
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticDevMuseum).then(cache => {
      cache.addAll(assets)
    })
  )
})
self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
  })