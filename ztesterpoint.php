<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPLATESHARES</title>
    <link rel="stylesheet" href="testing.css">
  
</head>
<body>
   
    

    <div class="prioroder">
    <nav class="navbar ulnavbys">
        <a href="#" class="navbar-brand">TEMPLATESHARES</a>
        <ul class="navbar-links">
            <li ><a href="/index.php">Αρχικη Σελιδα/Home page</a></li>
            <li ><a href="/shoutbox3.php">Shoutbox/Shoutbox</a></li>
            <li onclick="showContent('features')"><a  href="#">Αναζητηση </a></li>
            <li onclick="showContent('demo')" ><a href="#">Βοήθεια-Υποστήριξη</a></li>
           
            <li onclick="showContent('members')"><a  href="#">Μέλη  </a></li>
            <li onclick="showContent('community2')"><a  href="#">COMMUNITY </a></li>
            <li onclick="showContent('torrenthome')"><a  href="#">TORRENTS </a></li>
            <li ><a  href="/logout">Αποσυνδεθείτε </a></li>
          
            <div class="thema">
            <label for="theme-select" style="color: #fff;margin-left:10px;text-transform:uppercase">Choose Theme:</label>
            <select id="theme-select">
                <option value="light">Lightgrey</option>
                <option value="dark">Dark</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="orange">Orange</option>
                <option value="brown">Brown</option>
            </select>
          </div>
          </ul>
          <span class="menu-toggle" onclick="toggleMenu()">☰</span>
      </nav>
      
      <div class="imagefinebody">
        <div class="displayimagecontainer">
            <img id="backgroundImage" class="contdisplayimage" src="" alt="Background Image">
            <div id="innerpartsentence" class="displayinnertext"></div>
        </div>
     </div>
    
  <main class="linavbar linedo" id="torrenthome">
        <div class="menu-item">
          <h2 class="underline" >Εργαλεία Torrent </h2>
          <ul class="sub-menu">
                <li><a href="/browse.php">Όλα τα torrents  </a> </li>
                <li><a href="/upload.php">μεταφόρτωση torrent  </a> </li>
                <li><a href="/viewrequests.php">Αιτήματα </a> </li>
                <li><a href="/ts_subtitles.php"> Μεταφράσεις </a> </li>
                <li><a href="/last100.php">Τα τελευταία 100 Torrents</a> </li>
                <li><a href="/browse.php?special_search=mytorrents">Τα ιδιωτικά σας αρχεία </a></li>
          </ul>
        </div>
        
        <div class="menu-item">
          <h2 class="underline">Ελληνικα μέσα ενημέρωσης </h2>
          <ul class="sub-menu">
                  <li><a href="/browse.php?category=52">μεταγλωττισμένες ταινίες κινουμένων σχεδίων  </a> </li>
                  <li><a href="/browse.php?category=7">Μετεγγραφική σειρά κινουμένων σχεδίων    </a> </li>
                  <li><a href="/browse.php?category=35">Ελληνικα έργα  </a></li>
                  <li><a href="/browse.php?category=5">Ελληνικες σειρές  </a></li>
                  <li> <a href="/browse.php?category=69">Μεταφρασμένα μέσα   </a></li>
                  <li><a href="/browse.php?category=31">Διάφορα μέσα  </a></li>
          </ul>
        </div>
        
        <div class="menu-item">
          <h2 class="underline" onclick="location.href='#services'">Κυκλοφορίες συνδρομητών  </h2>
          <ul class="sub-menu">
                <li><a href="/browse.php?category=20">μεταγλωττισμένα ελληνικα κινούμενα σχέδια </a></li>
                <li><a href="/browse.php?category=21">Σειρά Gulf </a></li>
                <li><a href="/browse.php?category=41">Ελληνικα τραγούδια  </a></li>
          </ul>
        </div>
        
       
    </main>
    
      <!-- SECOND PART OF THE MENU-->

    
      <!-- FOURTH PART OF THE MENU-->
      <main class="linavbar linedo" id="demo">
        <div class="menu-item">
          <h2 class="underline">Βοήθεια </h2>
          <ul class="sub-menu">
            <li><a href="/contactstaff.php" style="color: #fff; text-decoration: none;">Επικοινωνήστε Με Τη Διοίκηση </a></li>
            <li><a href="/rules.php">Κανόνες </a></li>
            <li><a href="/faq.php">Ερωτήσεις και απαντήσεις  </a></li>
            <li><a href="/links.php">Σύνδεσμοι  </a></li>
            <li><a href="/ts_tutorials.php">Μαθήματα και εξηγήσεις </a></li>
            <li><a href="/contactstaff.php">Επικοινωνία Με Το Προσωπικό </a></li>
          </ul>
        </div>
        
        <div class="menu-item">
          <h2 class="underline" >Γίνε DJ ή Uploader </h2>
          <ul class="sub-menu">
            <li><a href="/shoutcast/">Γινε DJ </a></li>
            <li><a href="/shoutcast/dj.php?do=request">Αιτησεις DJ  </a></li>
            <li><a href="/upload.php">Γινε Uploader Member </a></li>
          </ul>
        </div>
        
     
        
       
    </main>


      <!--  lets -->
      
          <!--THIRD  PART OF THE MENU-->
      
          <main class="linavbar linedo" id="members">
            <div class="menu-item">
              <h2 class="underline" >Μέλη </h2>
              <ul class="sub-menu">
                    <li> <a href="/staff.php">Διαχειριστική ομάδα </a></li> 
                    <li><a href="/users.php">Μέλη ιστότοπου  </a></li> 
                    <li><a href="/topten.php?type=1">Τα πρωτα 10</a> </li> 
                    <li><a href="/topten.php?type=4">Εκλεκτά μέλη  </a></li>
                    <li><a href="/friends.php">Λίστα φίλων </a></li>
                    <li><a href="/badusers.php">Άτακτα μέλη  </a></li> 
                    <li><a href="/ts_social_groups.php">Δίκτυα κοινωνικής δικτύωσης  </a> </li>
                    <li><a href="/ts_blog.php">Ιστολόγια μελών </a> </li>
                    <li> <a href="/ts_albums.php">Λευκώματα μελών </a></li>
                
              </ul>
            </div>
            <div class="menu-item">
              <h2 class="underline">Πίνακας ελέγχου </h2>
                <h2 class="underline" >Γενικές ρυθμίσεις </h2>
                <ul class="sub-menu">
                      <li><a href="/usercp.php">Ο Πίνακας Ελέγχου σας  </a> </li> <br>
                      <li><a href="/usercp.php?act=edit_details">Επεξεργασία ρυθμίσεων και επιλογών  </a> </li> 
                      <li><a href="/usercp.php?act=edit_privacy">Επεξεργασία επιλογών απορρήτου   </a></li> 
                      <li><a href="/usercp.php?act=edit_theme_language">Επεξεργασία θέματος και γλώσσας </a></li> 
                      <li><a href="/usercp.php?act=edit_signature">Επεξεργασία υπογραφής  </a> </li> 
                      <li> <a href="/usercp.php?act=edit_avatar">Επεξεργασία Avatar </a> </li> 
                      <li><a href="/usercp.php?act=edit_password">Επεξεργασία email και κωδικού πρόσβασης </a> </li> 
                      <li><a href="/usercp.php?act=edit_seedbox">Ρύθμιση SeedBox</a> </li> 
                      <li> <a href="/usercp.php?act=edit_mood">Επεξεργασία διάθεσης</a></li> 
                  
                </ul>
              </div>
              <div class="menu-item">
                <h2 class="underline" >Διαχείριση μηνυμάτων  </h2>
                <ul class="sub-menu">
                      <li><a href="/messages.php">Ιδιωτικά μηνύματα στο φάκελο  </a> </li>
                      <li><a href="/messages.php">Εισερχόμενα  </a></li>
                      <li><a href="/messages.php">Εξερχόμενα </a></li>
                      
                </ul>
              </div>
          
           
              <div class="menu-item">
                <h2 class="underline" >Λεπτομέρειες μέλους  </h2>
                <ul class="sub-menu">
                      <li><a href="/userdetails.php">Προφίλ  </a></li>
                      <li><a href="/mybonus.php">Διαχείριση σημείων  </a></li>
                      <li><a href="/invite.php">Διαχείριση προσκλήσεων </a></li>
                      <li><a href="/ts_applications.php">اΓια συμβάντα και εφαρμογές  </a></li>
                      <li> <a href="/getrss.php">Σύντομο ειδήσεων  </a></li><br>
                      <li><a href="/browse.php?special_search=mytorrents">Τα αρχεία σας torrent  </a>  </li>   
                  
                </ul>
              </div>
         
            
           
            </main>
    
          <!--fifth part of the contact section-->
    
          <main class="linavbar  linedo" id="features">
            <div class="menu-item">
                <form class="search-form">
                    <input type="text" id="search-input" placeholder="Search..." />
                    <button type="submit" id="search-button">🔍</button>
                </form>
            </div>
        </main>
            
           

            


            
         
            
           
        


        <main class="linavbar linedo" id="community2" >
          <div class="menu-item">
            <h2 class="underline" > Φόρουμ και συζήτηση   </h2>
            <ul class="sub-menu">
                    <li> <a href="/tsf_forums/forumdisplay.php?fid=103">Φόρουμ υποθέσεων ιστότοπου  </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=104">Φόρουμ μαθημάτων και επεξηγήσεων   </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=114">Φόρουμ προσκλήσεων και άλλων τοποθεσιών  </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=96">Εγκυκλοπαίδεια αραβικών γραφικών ονομάτων    </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=106">Ισλαμικό φόρουμ και οι συζητήσεις του   </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=107">Γενικές περιοχές φόρουμ και συζήτησης   </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=109">Αιτήματα εγγραφής τηλεόρασης   </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=111">Σχέδια εξωφύλλων και εκδόσεων   </a></li>
                    <li><a href="/tsf_forums/forumdisplay.php?fid=110">Υποθέσεις Υπολογιστών και Διαδικτύου   </a></li>
              
            </ul>
          </div>
    
   

        </main>
      
      <main class="linavbar linedo" id="community3" >
        <div class="menu-item">
          <h2 class="underline" > Φόρουμ και συζήτηση    </h2>
          <ul class="sub-menu">
                  <li> <a href="/tsf_forums/forumdisplay.php?fid=103">Φόρουμ υποθέσεων ιστότοπου   </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=104">Φόρουμ μαθημάτων και επεξηγήσεων    </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=114">Φόρουμ προσκλήσεων και άλλων τοποθεσιών  </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=96">Εγκυκλοπαίδεια αραβικών γραφικών ονομάτων   </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=106">Ισλαμικό φόρουμ και οι συζητήσεις του   </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=107">Γενικές περιοχές φόρουμ και συζήτησης   </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=109">Αιτήματα εγγραφής τηλεόρασης   </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=111">Σχέδια εξωφύλλων και εκδόσεων    </a></li>
                  <li><a href="/tsf_forums/forumdisplay.php?fid=110">Υποθέσεις Υπολογιστών και Διαδικτύου </a></li>
            
          </ul>
        </div>
      </main>
</div>


    
    <div class="forphase" style="background-color: green;">
      
    
<div class="labenavbar">
    <span class="menu-icon" onclick="tittoggleMenu()">☰</span>
    <h1 class="navbar-brandylink">TEMPLATESHARES</h1>
</div>

<!--
    <li ><a href="/index.php">Αρχικη Σελιδα/Home page</a></li>
            <li ><a href="/shoutbox3.php">Shoutbox/Shoutbox</a></li>
            <li onclick="showContent('features')"><a  href="#">Αναζητηση -- SERACH </a></li>
            <li onclick="showContent('demo')" ><a href="#">Βοήθεια-Υποστήριξη/Help-Support</a></li>
           
            <li onclick="showContent('members')"><a  href="#">MEMBERS </a></li>
            <li onclick="showContent('community2')"><a  href="#">COMMUNITY </a></li>
            <li onclick="showContent('torrenthome')"><a  href="#">TORRENTS </a></li>
            <li ><a  href="/logout">Αποσυνδεθείτε   --Sign out</a></li>




-->

<ul class="dropdown-menu ulnavbys" id="mainMenu">
    <li>
        <li ><a href="/index.php">Αρχικη Σελιδα</a></li>
        
    </li>

    <li>
      <li ><a href="/shoutbox3.php">Shoutbox</a></li>
      
  </li>
  
    
    <li>
        <a  href="#" onclick="toggleNestedMenu(event)" href="#">Βοήθεια-Υποστήριξη</a>
        <ul class="nested-menu linavbar">
            <h2 class="underline">Βοήθεια -- AID</h2>
            <li><a href="/contactstaff.php" style="color: #fff; text-decoration: none;">Επικοινωνήστε Με Τη Διοίκηση </a></li>
      <li><a href="/rules.php">Κανόνες  -- Rules </a></li>
      <li><a href="/faq.php">Ερωτήσεις και απαντήσεις </a></li>
      <li><a href="/links.php">Σύνδεσμοι  -- Links </a></li>
      <li><a href="/ts_tutorials.php">Μαθήματα και εξηγήσεις   </a></li>
      <li><a href="/contactstaff.php">Επικοινωνία Με Το Προσωπικό </a></li>


                <h2 class="underline" >Γίνε DJ ή Uploader </h2>
                <li><a href="/shoutcast/">Γινε DJ  </a></li>
                <li><a href="/shoutcast/dj.php?do=request">Αιτησεις DJ  </a></li>
                <li><a href="/upload.php">Γινε Uploader Member  </a></li>
        </ul>
    </li>

    <li>
        <a href="#" onclick="toggleNestedMenu(event)">  MEMBERS</a>
        <ul class="nested-menu linavbar">
            <h2 class="underline" >Μέλη -- Members</h2>
            <li> <a href="/staff.php">Διαχειριστική ομάδα </a></li> 
            <li><a href="/users.php">Μέλη ιστότοπου  </a></li> 
            <li><a href="/topten.php?type=1">Τα πρωτα 10 </a> </li> 
            <li><a href="/topten.php?type=4">Εκλεκτά μέλη </a></li>
            <li><a href="/friends.php">Λίστα φίλων </a></li>
            <li><a href="/badusers.php">Άτακτα μέλη  </a></li> 
            <li><a href="/ts_social_groups.php">Δίκτυα κοινωνικής δικτύωσης  </a> </li>
            <li><a href="/ts_blog.php">Ιστολόγια μελών </a> </li>
            <li> <a href="/ts_albums.php">Λευκώματα μελών  </a></li>


             <h2 class="underline">Πίνακας ελέγχου </h2>
             <h2 class="underline" >Γενικές ρυθμίσεις</h2>
             <li><a href="/usercp.php">Ο Πίνακας Ελέγχου σας  </a> </li> <br>
             <li><a href="/usercp.php?act=edit_details">Επεξεργασία ρυθμίσεων και επιλογών  </a> </li> 
             <li><a href="/usercp.php?act=edit_privacy">Επεξεργασία επιλογών απορρήτου   </a></li> 
             <li><a href="/usercp.php?act=edit_theme_language">Επεξεργασία θέματος και γλώσσας  </a></li> 
             <li><a href="/usercp.php?act=edit_signature">Επεξεργασία υπογραφή  </a> </li> 
             <li> <a href="/usercp.php?act=edit_avatar">Επεξεργασία Avatar  </a> </li> 
             <li><a href="/usercp.php?act=edit_password">Επεξεργασία email και κωδικού πρόσβασης </a> </li> 
             <li><a href="/usercp.php?act=edit_seedbox">Ρύθμιση SeedBox </a> </li> 
             <li> <a href="/usercp.php?act=edit_mood">Επεξεργασία διάθεσης</a></li> 


            <h2 class="underline" >Διαχείριση μηνυμάτων  -- Manage messages</h2>
            <li><a href="/messages.php">Ιδιωτικά μηνύματα στο φάκελο </a> </li>
            <li><a href="/messages.php">Εισερχόμενα </a></li>
           <li><a href="/messages.php">Εξερχόμενα </a></li>

<!-- MESSAGES PARTS -->

           <h2 class=" cleared underline" >Λεπτομέρειες μέλους </h2>
           <li><a href="/userdetails.php">Προφίλ </a></li>
            <li><a href="/mybonus.php">Διαχείριση σημείων </a></li>
            <li><a href="/invite.php">Διαχείριση προσκλήσεων  </a></li>
            <li><a href="/ts_applications.php">اΓια συμβάντα και εφαρμογές  </a></li>
            <li> <a href="/getrss.php">Σύντομο ειδήσεων  </a></li><br>
            <li><a href="/browse.php?special_search=mytorrents">Τα αρχεία σας torrent  </a>  </li> 
        </ul>
    </li>

    <li>
        <a href="#" onclick="toggleNestedMenu(event)">COMMUNITY</a>
        <ul class="nested-menu linavbar">
            <h4 class="underline" >Φόρουμ και συζήτηση    </h4>
            <li> <a href="/tsf_forums/forumdisplay.php?fid=103">Φόρουμ υποθέσεων ιστότοπου   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=104">Φόρουμ μαθημάτων και επεξηγήσεων   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=114">Φόρουμ προσκλήσεων και άλλων τοποθεσιών   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=96">Εγκυκλοπαίδεια αραβικών γραφικών ονομάτων    </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=106">Ισλαμικό φόρουμ και οι συζητήσεις του   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=107">Γενικές περιοχές φόρουμ και συζήτησης   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=109">Αιτήματα εγγραφής τηλεόρασης  </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=111">Σχέδια εξωφύλλων και εκδόσεων   </a></li>
            <li><a href="/tsf_forums/forumdisplay.php?fid=110">Υποθέσεις Υπολογιστών και Διαδικτύου   </a></li>



          
        </ul>
    </li>
    <li>
        <a href="#" onclick="toggleNestedMenu(event)">TORRENTS</a>
        <ul class="nested-menu linavbar">
            <h4 class="underline" >Εργαλεία Torrent </h4>
                  <li><a href="/browse.php">Όλα τα torrents </a> </li>
                  <li><a href="/upload.php">μεταφόρτωση torrent   </a> </li>
                  <li><a href="/viewrequests.php">Αιτήματα  </a> </li>
                  <li><a href="/ts_subtitles.php"> Μεταφράσεις  </a> </li>
                  <li><a href="/last100.php">Τα τελευταία 100 Torrents </a> </li>
                  <li><a href="/browse.php?special_search=mytorrents">Τα ιδιωτικά σας αρχεία  </a></li>


            <h4 class="underline" >Ελληνικα μέσα ενημέρωσης  </h4>
                  <li><a href="/browse.php?category=52">μεταγλωττισμένες ταινίες κινουμένων σχεδίων  </a> </li>
                  <li><a href="/browse.php?category=7">Μετεγγραφική σειρά κινουμένων σχεδίων    </a> </li>
                  <li><a href="/browse.php?category=35">Ελληνικα έργα  </a></li>
                  <li><a href="/browse.php?category=5">Ελληνικες σειρές  </a></li>
                  <li> <a href="/browse.php?category=69">Μεταφρασμένα μέσα   </a></li>
                  <li><a href="/browse.php?category=31">Διάφορα μέσα  </a></li>

            <h4 class="underline" >Κυκλοφορίες συνδρομητών   </h4>
                    <li><a href="/browse.php?category=20">μεταγλωττισμένα ελληνικα κινούμενα σχέδια  </a></li>
                    <li><a href="/browse.php?category=21">Σειρά Gulf </a></li>
                    <li><a href="/browse.php?category=41">Ελληνικα τραγούδια   </a></li>
      
    
</ul>
</li>
              <li ><a  href="/logout">Αποσυνδεθείτε  </a></li>
</div>

</script>
<script src="javascriptprofile.js"></script>
</body>
</html>