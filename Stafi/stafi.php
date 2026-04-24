<?php 
$page_css = "stafi.css";
require __DIR__ . '/../includes/header.php'; 
require __DIR__ . '/../includes/navbar.php'; 

// Numeric array
$departments = ["Kardiologji", "Neurologji", "Gjinekologji", "Laborator", "Radiologji", "Pediatri", "Ortopedi"];

// Associative array
$featuredDoctor = [
    "name" => "Dr. Arben Hoxha",
    "specialty" => "Kardiolog",
    "experience" => 12
];

// Multidimensional array
$doctors = [
    [
        "name" => "Dr. Arben Hoxha",
        "specialty" => "Kardiolog",
        "experience" => 12,
        "image" => "../img/kardiolog.jpg",
        "file" => "kardiolog-1.html"
    ],
    [
        "name" => "Dr. Dritan Shala",
        "specialty" => "Kardiolog",
        "experience" => 9,
        "image" => "../img/kardiologu.jpg",
        "file" => "kardiolog-2.html"
    ],
    [
        "name" => "Dr. Fatmir Krasniqi",
        "specialty" => "Neurologjist",
        "experience" => 11,
        "image" => "../img/neurologjist.jpg",
        "file" => "neurologjist-1.html"
    ],
    [
        "name" => "Dr. Liridona Berisha",
        "specialty" => "Neurologjiste",
        "experience" => 8,
        "image" => "../img/neurologjiste.jpg",
        "file" => "neurologjiste.html"
    ],
    [
        "name" => "Dr. Elona Gashi",
        "specialty" => "Gjinekologe",
        "experience" => 10,
        "image" => "../img/gjinekologia.jpg",
        "file" => "gjinekologe-1.html"
    ],
    [
        "name" => "Dr. Anisa Bytyqi",
        "specialty" => "Gjinekologe",
        "experience" => 6,
        "image" => "../img/gjinekologiaa.jpg",
        "file" => "gjinekologe-2.html"
    ],
    [
        "name" => "Dr. Shkumbin Rexhepi",
        "specialty" => "Laborant",
        "experience" => 7,
        "image" => "../img/laboranti.jpg",
        "file" => "laborant.html"
    ],
    [
        "name" => "Dr. Valmira Jakupi",
        "specialty" => "Laborante",
        "experience" => 5,
        "image" => "../img/laborante.jpg",
        "file" => "laborante.html"
    ],
    [
        "name" => "Dr. Agron Bajrami",
        "specialty" => "Radiologjist",
        "experience" => 13,
        "image" => "../img/radiologjist.jpg",
        "file" => "radiologjist.html"
    ],
    [
        "name" => "Dr. Ramadan Luma",
        "specialty" => "Mjek Familjar",
        "experience" => 15,
        "image" => "../img/MjekuFamiljar.jpg",
        "file" => "mjek-familjar.html"
    ],
    [
        "name" => "Dr. Vlora Morina",
        "specialty" => "Pediatre",
        "experience" => 7,
        "image" => "../img/pediatre.jpg",
        "file" => "pediatre.html"
    ],
    [
        "name" => "Dr. Agim Hoxha",
        "specialty" => "Ortoped",
        "experience" => 14,
        "image" => "../img/ortopedi - Copy.jpg",
        "file" => "ortoped.html"
    ]
];

function sortDoctors($doctors, $sortBy)
{
    if ($sortBy === "name") {
        usort($doctors, function ($a, $b) {
            return strcmp($a["name"], $b["name"]);
        });
    } else {
        usort($doctors, function ($a, $b) {
            return $b["experience"] <=> $a["experience"];
        });
    }

    return $doctors;
}

$sortBy = $_GET["sort"] ?? "experience";
$sortedDoctors = sortDoctors($doctors, $sortBy);
?>


<!-- HERO -->
<section class="hero hero-services">
    <div class="container">
        <h1>Stafi Mjekësor</h1>
        <p>Profesionistët mjekësorë me përvojë dhe angazhim për shëndetin tuaj.</p>

        <div class="breadcrumb">
            <a href="../Ballina/ballina.php">Ballina</a>
            <span>&gt;</span>
            <span>Stafi Mjekësor</span>
        </div>
    </div>
</section>

<!-- GRID E STAFIT -->
<main class="container">

    <!-- 
        Kjo pjese perdor te dhenat nga arrays ne PHP.
        $doctors eshte multidimensional array, ndersa $departments eshte numeric array.
    -->
    <section class="staff-tools">
        <input
            type="text"
            id="staffSearch"
            placeholder="Kërko sipas emrit ose specializimit..."
            aria-label="Kërko staf"
        />

        <!-- 
            count() perdoret per te numeruar sa doktore dhe sa departamente jane ne arrays.
        -->
        <div class="staff-stats" id="staffStats">
            <?php echo count($doctors); ?> staf • <?php echo count($departments); ?> departamente
        </div>

        <!-- 
            Keto linke dergojne parameter ne URL (?sort=experience ose ?sort=name).
            PHP e lexon me $_GET["sort"] dhe pastaj funksioni sortDoctors() ben sortimin.
        -->
        <div class="staff-stats">
            Sorto:
            <a href="stafi.php?sort=experience">Sipas eksperiencës</a> |
            <a href="stafi.php?sort=name">Sipas emrit</a>
        </div>
    </section>

    <section class="staff-grid">

        <!-- 
            foreach kalon neper secilin doktor nga array i sortuar.
            $sortedDoctors vjen nga funksioni sortDoctors().
        -->
        <?php foreach ($sortedDoctors as $doctor): ?>
            <a href="<?php echo htmlspecialchars($doctor["file"]); ?>" class="staff-link">
                <article class="staff-card">
                    <div class="staff-image">
                        <img 
                            src="<?php echo htmlspecialchars($doctor["image"]); ?>" 
                            alt="<?php echo htmlspecialchars($doctor["specialty"]); ?>"
                        >
                    </div>

                    <!-- 
                        htmlspecialchars() perdoret per shfaqje me te sigurt te te dhenave ne HTML.
                    -->
                    <h3><?php echo htmlspecialchars($doctor["name"]); ?></h3>
                    <p class="staff-specialty"><?php echo htmlspecialchars($doctor["specialty"]); ?></p>

                    <!-- 
                        if/else kontrollon eksperiencen.
                        Nese doktori ka 10 ose me shume vite pervoje, shfaqet si Senior Doctor.
                    -->
                    <?php if ($doctor["experience"] >= 10): ?>
                        <p class="staff-specialty">Senior Doctor - <?php echo $doctor["experience"]; ?> vite përvojë</p>
                    <?php else: ?>
                        <p class="staff-specialty"><?php echo $doctor["experience"]; ?> vite përvojë</p>
                    <?php endif; ?>
                </article>
            </a>
        <?php endforeach; ?>

    </section>

</main>


<!-- COOKIE BANNER -->
<div id="cookie-banner" class="cookie-banner" hidden>
    <div class="cookie-banner__content">
        <p class="cookie-banner__text">
            CarePoint përdor cookies për të përmirësuar funksionalitetin e faqes dhe për të analizuar përdorimin e saj.
            Duke klikuar “Prano”, ju pajtoheni me përdorimin e cookies.
        </p>

        <div class="cookie-banner__actions">
            <button id="cookie-accept" class="cookie-btn cookie-btn--primary" type="button">
                Prano
            </button>
            <button id="cookie-dismiss" class="cookie-btn cookie-btn--secondary" type="button">
                Refuzo
            </button>
        </div>
    </div>
</div>

<script src="stafi.js"></script>
<script src="../cookies.js"></script>

<?php require __DIR__ . '/../includes/footer.php'; ?>