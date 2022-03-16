<?php
require_once( 'GenChar.php' );
$g = new GenChar;
?>
<!doctype html>
<html>
<head>
  <title>GenChar: Syllables</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
<div class="min-h-full">
  <header class="pb-24 bg-indigo-600">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="relative py-5 flex items-center justify-center lg:justify-between">
        <div class="absolute left-0 flex items-center flex-shrink-0 lg:static">
          <a href="index.php">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="GenChar">
          </a>
          <a href="index.php" class="text-white ml-3">GenChar</a>
        </div>

        <!-- Right section on desktop -->
        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
          <a href="https://gens-der-allianz.de" class="text-indigo-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Gens der Allianz </a>
        </div>

      </div>
      <div class="hidden lg:block border-t border-white border-opacity-20 py-5">
        <div class="grid grid-cols-3 gap-8 items-center">
          <div class="col-span-2">
            <nav class="flex space-x-4">
              <a href="index.php" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="page"> Generator </a>
              <a href="syllables.php?class=demonhunter" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Demonhunter </a>
              <a href="syllables.php?class=druid" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Druid </a>
              <a href="syllables.php?class=hunter" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Hunter </a>
              <a href="syllables.php?class=warlock" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Warlock </a>
              <a href="syllables.php?class=warrior" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Warrior </a>
            </nav>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="-mt-24 pb-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="sr-only">GenChar: WOW Charname Generator</h1>
      <!-- Main 3 column grid -->
      <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
        <!-- Left column -->
        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
          <section aria-labelledby="section-1-title">
            <h2 class="sr-only" id="section-1-title">Section title</h2>
            <div class="rounded-lg bg-white overflow-hidden shadow">
              <div class="p-6 prose">

                <form>
                  <input type="text" name="class" value="<?php echo $_GET['class']; ?>">
                <button type="submit" class="flex items-center bg-fuchsia-600 p-3 border ring-2 hover:bg-fuchsia-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-3 font-bold">Generate Charname!</span>
                </button>
                </form>

                <?php

                $wowclass = 'void';
                $wowclass = $_GET['class'];

                echo '<p class="text-xl">' . $wowclass;
                echo '<br><span class="text-5xl font-mono">'. $g->char_name( $wowclass, 3 ) . '</span>';
                echo '</p>';
                echo "<hr>";

                echo '<p class="text-xl">' . $g->get_coll_size( $wowclass ) . ' Syllables</p>';
                echo '<div class="h-96 overflow-scroll font-mono">';
                $g->print_coll( $wowclass );
                echo '</div>';

                ?>


              </div>
            </div>
          </section>
        </div>

        <!-- Right column -->
        <div class="grid grid-cols-1 gap-4">
          <section aria-labelledby="section-2-title">
            <h2 class="sr-only" id="section-2-title">Section title</h2>
            <div class="rounded-lg bg-white overflow-hidden shadow">
              <div class="p-6 prose">
                <h2>GenChar, a WOW Charname Generator</h2>
                <p>WOW Charname Generator from <a href="https://gens-der-allianz.de">Gens-der-Allianz</a>, Allianz Fraction on Thrall.</p>
                <h2>Available Char Classes</h2>
                <p>So far, these Char Classes are available: <strong>
                  <?php $g->print_classes(); ?>
                </strong></p>

                <?php $g->print_stats( ); ?>

                <p>This Software Project is on GITHUB: <a href="https://github.com/phoenixseo/genchar">https://github.com/phoenixseo/genchar</a></p>

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>


  <footer>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
      <div class="border-t border-gray-200 py-8 text-sm text-gray-500 text-center sm:text-left"><span class="block sm:inline">&copy; 2022 Gens der Allianz</span> <span class="block sm:inline">All rights reserved.</span></div>
    </div>
  </footer>
</div>



</body>
</html>
