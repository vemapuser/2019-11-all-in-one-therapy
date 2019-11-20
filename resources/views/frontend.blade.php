@extends('base')

@section('title', 'Willkommen')

@section('top-links')
    @auth
        <a href="/backend">Backend</a>
    @endauth
@endsection

@section('main')
<div class="w-50" style="margin:auto">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/blue-and-silver-stetoscope-40568.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Leistungen</h5>
          <ul>
            <li>Physiotherapie</li>
            <li>Sport-Physiotherapie</li>
            <li>Fußreflexzonenmassage</li>
            <li>Lymphdrainage</li>
            <li>Kinesio-Taping</li>
            <li>Osteopathie</li>
            <li>Fasziendistorsionsmodell (FDM)</li>
            <li>Craniosacral-Therapie</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/photo-of-woman-doing-yoga-2294354.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Preise und Verrechnung</h5>
          <ul>
          <li>Physiotherapie (45 min): 	75 €</li>
          <li>Osteopathie    (45 min):   90 €</li>
          <li>Kinesiotape (1 Stk.):     15-25 €</li>
          </ul>
          <p>Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird Ihnen dieser in Rechnung gestellt.</p>
          <p>Wir sind umsatzsteuerbefreit gem. § 19 UStg.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/woman-doing-yoga-373919.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Kostenrückerstattung</h5>
          <p>
            Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung für Physiotherapie von Ihrem Haus- oder Facharzt.
            Diese muss chefärztlich von Ihrer Krankenkasse bewilligt werden (übernehmen wir auch gerne für Sie).
          </p>
          <p>Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten Verordnung bei Ihrer Krankenkasse einreichen.</p>
          <p>
            Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer Krankenkasse rückerstattet.
            Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/woman-in-white-cap-shirt-on-stability-ball-41213.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Terminvereinbarung</h5>
          <p>Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin vereinbaren.</p>
          <p>
            Unsere Sekretariatsöffnungszeiten sind:<br>
            Montag - Freitag 8:00 - 11:00<br>
            +43 / 123 123 123 123<br>
            office@example.com
          </p>
          <p>
            Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer,<br>
            wir rufen Sie verlässlich so bald wie möglich zurück.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/woman-exercising-bear-body-of-water-1300526.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Mitzubringen</h5>
          <ul>
            <li>Bequeme Kleidung</li>
            <li>Bewilligte Verordnung</li>
            <li>Befunde (Röntgen, MRT, Arztbrief) falls vorhanden</li>
            <li>Handtuch</li>
          </ul>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/care-clinic-cure-doctor-371941.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Über uns - Anna Fink</h5>
          <p class="smalltext">
            Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig. Die Osteopathie biete ich ebenfalls an -<br>
            sie ergänzt die Behandlung optimal. Barbara und ich arbeiten schon lange zusammen und wir freuen uns, auch Sie in unserer Praxis begrüßen zu dürfen.
          </p>
          <p class="smalltext">
            <strong>Ausbildungen:</strong><br>
            2016: FDM Modul 1 + 2<br>
            Seit 2012: Osteopathie an der Wiener Schule für Osteopathie<br>
            2010-2012: Sportphysiotherapie<br>
            2007-2010: Akademie für Physiotherapie am Wilhelminenspital
          </p>
          <p class="smalltext">
            <strong>Berufliche Aktivitäten:</strong><br>
            Seit 2019: Praxisgemeinschaft mit Barbara<br>
            Seit 2011: SPORTO-Praxisgemeinschaft<br>
            2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt<br>
            2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus
          </p>
          <p class="smalltext">
            <strong>Sportphysiotherapeutische Aktivitäten:</strong><br>
            2011: Austria Wien Junioren U13 und U14<br>
            2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie Europacup Niederlande<br>
            2009: AON-N-Volleys
          </p>
          <p class="smalltext">
            <strong>Therapeutische Erfahrung mit Sportarten:</strong><br>
            Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen
          </p>
          <p class="smalltext">
            <strong>Hobbies:</strong><br>
            Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/woman-wearing-white-shirt-1181690.jpg" class="d-block w-100">
        <div class="carousel-caption d-block">
          <h5>Über uns - Barbara Berg</h5>
          <p class="smalltext">
            Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen gemeinsam gemacht.<br>
            Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das gelingt uns jeden Tag aufs Neue.
          </p>
          <p class="smalltext">
            <strong>Ausbildungen:</strong><br>
            2012 –  2014: Yoga Ausbildung in Tirol<br>
            2012: Budo-Teacher-Training in Graz<br>
            2011: Yoga Master-Training in Nepal<br>
            2010: Yoga & Spiralakrobatik Foundation Level<br>
            2002 – 2008: Wiener Schule für Osteopathie<br>
            1997 – 2000: Akademie für Physiotherapie SFB
          </p>
          <p class="smalltext">
            <strong>Berufliche Aktivitäten:</strong><br>
            Seit 2019: Praxisgemeinschaft mit Anna<br>
            2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft<br>
            2006 – 2010: GOLDO Praxisgemeinschaft<br>
            2005 – 2006: Health & More We do it for you Consult AG<br>
            2004 – 2005: Sanatorium Helga<br>
            2000 – 2004: Physikalisches Institut Voltenberg
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
