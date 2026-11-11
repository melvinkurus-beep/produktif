/* ==========================================================
   VOID — semua teks, link, dan angka ada di file ini.
   Edit di sini saja, index.html tidak perlu disentuh.
   ========================================================== */
window.VOID = {
  name: "VOID",

  /* ---- Discord ---------------------------------------------------
     inviteCode : kode di belakang discord.gg/  (WAJIB invite permanen / "Never expire")
     Dipakai untuk mengambil jumlah member & online secara live.      */
  discord: {
    inviteCode: "your-invite",
    refreshSeconds: 60,
  },

  nav: [
    { label: "Home", href: "#home" },
    { label: "About", href: "#about" },
    { label: "Features", href: "#features" },
    { label: "Community", href: "#community" },
  ],
  navCta: "Join Discord",

  hero: {
    tagline: "Tempat gamer berkumpul. Mabar kapan saja, ikut event tiap minggu, dan ngobrol santai tanpa drama.",
    ctaPrimary: "Join VOID Server",
    ctaSecondary: "Lihat fitur",
    /* Isi path video untuk logo VOID yang bergerak, contoh: "assets/void-loop.mp4"
       Kosongkan ("") untuk memakai animasi glow bawaan.                         */
    logoVideo: "",
  },

  about: {
    title: "Ruang kosong yang kami isi bersama",
    text: "VOID dibuat untuk gamer yang bosan dengan server sepi. Siapa pun bisa masuk: pemain kasual, kompetitif, atau yang sekadar ingin punya teman online. Semua game boleh, semua level diterima, dan aturannya sederhana: saling hormat.",
  },

  /* icon: users | bot | gift | mic */
  featuresTitle: "Kenapa gabung VOID",
  features: [
    { icon: "users", title: "Komunitas aktif",      text: "Chat ramai dari pagi sampai dini hari. Cari tim mabar dalam hitungan menit." },
    { icon: "bot",   title: "Bot & game custom",    text: "Musik, level XP, mini game, dan leaderboard buatan sendiri yang hanya ada di VOID." },
    { icon: "gift",  title: "Event & giveaway",     text: "Turnamen mingguan, malam trivia, dan giveaway Nitro serta item game." },
    { icon: "mic",   title: "Voice channel santai", text: "Ruang suara tanpa tekanan untuk mabar, nugas bareng, atau sekadar nongkrong." },
  ],

  /* ---- Statistik ---------------------------------------------------
     live: "members" / "online" → otomatis dari Discord (value = cadangan
     kalau Discord tidak bisa dihubungi). Tanpa live → angka manual.     */
  stats: {
    title: "VOID saat ini",
    cta: "Masuk sekarang",
    items: [
      { label: "Total member",    value: 12840, suffix: "+", live: "members" },
      { label: "Member online",   value: 2315,  dot: true,  live: "online" },
      { label: "Channel aktif",   value: 64 },
      { label: "Event per bulan", value: 48 },
    ],
  },

  /* icon: discord | instagram | youtube | tiktok */
  socials: [
    { name: "Discord",   icon: "discord",   url: "https://discord.gg/your-invite" },
    { name: "Instagram", icon: "instagram", url: "https://instagram.com/" },
    { name: "YouTube",   icon: "youtube",   url: "https://youtube.com/" },
    { name: "TikTok",    icon: "tiktok",    url: "https://tiktok.com/" },
  ],

  footer: {
    tagline: "Komunitas gaming untuk semua orang.",
    copyright: "VOID. Semua hak dilindungi.",
  },
};
