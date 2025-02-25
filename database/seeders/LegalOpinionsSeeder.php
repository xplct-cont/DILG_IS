<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalOpinionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if there are existing records
        if (DB::table('legal_opinions')->exists()) {
            // Hardcoded data with unique reference values
            $legalOpinions = [
                [
                    'title' => 'LO-026S2006',
                    'reference' => 'LO-026S2006', // Ensure unique reference
                    'extracted_texts' => 'RAO
                                        Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. francisco Qold Condominium II, EDSA
                                        cor. Mapagmahal St., Diliman, Quezon City
                                        OHHICE OF UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        26 April 2006
                                        ATTV. MARKO S. LASERNA
                                        City Legal Officer
                                        Santa Rosa City, Laguna
                                        Dear Atty. Laserna:
                                        This pertains to your letter seeking our legal opinion on the following
                                        issues, to wit:
                                        1. Limitation on the exercise of the power to veto a Resolution as
                                        provided in Section 55 of the Local Government Code;
                                        2. Whether or not the veto power vested in the Local Chief
                                        Executive can be exercised by the Vice Mayor in his capacity as
                                        Acting Mayor; and
                                        3. Whether or not the Vice Mayor acting as Mayor can veto
                                        Resolution not involving a local development plan and public
                                        investment program passed by the Sangguniang Panlungsod.
                                        In reply to the first issue, please be informed that generally, only
                                        ordinances are subject to veto by the Local Chief Executive. However, the Local
                                        Government Code allows the Local Chief Executive to veto resolutions when they
                                        deal with: (1) local development plans, or (2) public investment programs. The
                                        reason is that, resolutions of that kind involve the investment of public money;
                                        hence, are in the nature of ordinances (DILG Opinion No. 12, s. 1996). All other
                                        resolutions, i.e., those that do not involve local development plans or public
                                        investment programs need not be submitted to the Local Chief Executive for
                                        approval or subject to the veto power of the Local Chief Executive (DILG Opinion
                                        No. 118, s. 2003).
                                        Anent the second issue, we answer in the affirmative.
                                        Please be informed that Section 46 (a) of the Local Government Code
                                        provides that "when the governor, city or municipal mayor, or punong barangay

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        is temporarily incapacitated to perform his duties for physical or legal reason,
                                        such as, but not limited to, leave of absence, travel abroad and suspension from
                                        office, the vice governor, city or municipal vice mayor, or the highest ranking
                                        sangguniang barangay member shall automatically exercise the powers and
                                        perform the duties and functions of the local chief executive concerned, except the
                                        power to appoint, suspend, or disntiss employees which can only be exercised if
                                        the period of temporary incapacity exceeds thirty (30) working days".
                                        Please note that the law grants plenary power to the Vice Mayor as Acting
                                        Mayor as if it is the Mayor who is exercising such power, albeit such power was
                                        limited by the last sentence of the same provision. Such being the case, the
                                        Acting Mayor, who is temporarily assuming all the powers and performing all the
                                        functions of the Office of the Mayor, is endowed with the authority to approve or
                                        veto ordinances or the two kinds of resolutions stated above.
                                        With regard to the third issue, please be informed that as earlier stated,
                                        only resolutions which deal with local development plans or public investment
                                        programs are subject to the authority of the Mayor or the Acting Mayor for that
                                        matter, to either approve or veto the same. Conversely, all other resolutions are
                                        no longer subject to the said approval or veto power of the Mayor or even by the
                                        Vice Mayor in his capacity as Acting Mayor.
                                        Hope we have enlightened you on the matter.
                                        Very truly yours,
                                        WENCELITO T. ANDANAR
                                        Undersecreta
                                        Legal:94.ins
                                        Director Roberto C. Abejero
                                        cc:
                                        DILG Region IV-A
                                        Taguig City
                                        ',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-027S2006',
                    'reference' => 'LO-027S2006', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II, EDSA
                                        cor. Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF UNDERSECRETARY LOCAL GOVERNMENT
                                        27
                                        06 June 2006
                                        VICE MAYOR RODERICK A. ALCAIA
                                        City Hall, Lucena City
                                        Dear Vice Mayor Alcala:
                                        This refers to your request for this Departments legal opinion in
                                        connection with the action of the Sangguniang Panlungsod of Lucena City
                                        placing Acting Punong Barangay Rebecca S. Dator, through Resolution No.
                                        13-408 dated 10 April 2006, under preventive suspension for sixty (60)
                                        days, which Resolution was vetoed by the City Mayor.
                                        Culled from the records are the following:
                                        An administrative case was filed against Acting Punong Barangay Dator,
                                        Barangay Xl, that city, which was referred to the Committee on Laws,
                                        Ethics and Barangay Affairs of the Sangguniang Panlungsod, for hearing;
                                        On 01 March 2006, the said Committee issued a report recommending
                                        that the respondent Acting Punong Barangay Dator be placed under
                                        preventive suspension;
                                        Adopting the said Committee report, the Sangguniang Panlungsod issued
                                        the aforesaid Resolution and resolved to impose the preventive
                                        suspension for sixty (60) days;
                                        However, the Mayor vetoed the said Sanggunian Resolution on the
                                        ground that the power to impose preventive suspension resides in the
                                        executive and not with the legislative.
                                        Such being the case, you have posed the following queries, to wit:
                                        1. Whether the veto message of the Honorable Ramon Y.
                                        Talaga, Jr. is in order whereby it was alleged that the
                                        6

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        powers and authority to impose preventive suspension
                                        against a barangay official is vested in the City Mayor and
                                        not in the Legislative Body, the Sangguniang Panlungsod;
                                        and
                                        2. Can the Committee on Accountability of Public Officials,
                                        Ethics and Privileges where the said vetoed resolution was
                                        recommitted pass a new resolution by merely recommending
                                        to the City Mayor to suspend the OIC Barangay Official
                                        concerned?"
                                        Before addressing your concerns, may we first settle the issue as to
                                        what actions of the Sangguniang Panlungsod are subject to the approval or
                                        veto of the City Mayor.
                                        Under the Local Government Code, the Sangguniang Panlungsod
                                        performs dual functions, namely: (1) legislative functions; and (2) quasi-
                                        judicial functions.
                                        Legislative functions pertain to the power of the Sangguniang
                                        Panlungsod to pass ordinances and resolutions. The pertinent provisions of
                                        the Code that govern these legislative functions of the Sangguniang
                                        Panlungsod are from Sections 48 to 59. On the other hand, quasi-judicial
                                        functions refer to the power of the Sangguniang Panlungsod to hear and
                                        decide administrative cases filed against elective barangay officials of the
                                        city. The pertinent provisions in the Code that pertains to the quasi-judicial
                                        functions of the Sangguniang Panlungsod are found from Sections 60 to 68
                                        thereof.
                                        In relation to its quasi-judicial functions, it is noted that the law
                                        constituted the Sangguniang Panlungsod as the disciplinary authority over
                                        elective barangay officials. On the other hand, pursuant to Section 32 of the
                                        Code, the City Mayor is the one vested by law the authority to exercise the
                                        power of general supervision over all its component barangays, including its
                                        officials, whether elective or appointive.
                                        Supervision has been defined by law as the power of the supervisor to
                                        oversee that laws are faithfully complied with by the subordinates.
                                        Therefore, to delineate the relationship between the Mayor and the elective
                                        barangay officials, on the one hand, from that of the Sangguniang

                                        ****** Result for Image/Page 3 ******
                                        3-
                                        Panlungsod over the same officials, on the other, the Mayor is the one
                                        exercising the power of general supervision over all elective barangay
                                        officials, while the Sangguniang Panlungsod is the one exercising disciplinary
                                        authority over elective barangay officials.
                                        Examining now the power of the City Mayor to approve or veto
                                        measures enacted by the Sangguniang Panlungsod, it is evident from the
                                        provisions of the Local Government Code, particularly Sections 54 and 55
                                        thereof, that such power is available only with respect to measures passed
                                        by the Sanggunian pursuant to its legislative functions. On the other hand, a
                                        reading of Sections 60-68 of the same Code would reveal that nothing
                                        therein requires the approval by the City Mayor of, or allows him to veto any
                                        measure passed by the Sanggunian in the exercise of its quasi-judicial
                                        functions.
                                        For emphasis, and as a matter of illustration, Section 66 of the Code
                                        provides for the manner by which the Sanggunian shall render its decision in
                                        its quasi-judicial functions. Nothing therein provides that the decision of the
                                        Sangguniang Panlungsod in administrative cases is subject to the approval of
                                        the City Mayor. Hence, it is clear that decisions of the Sangguniang
                                        Panlungsod in disposing administrative cases against elective barangay
                                        officials are not anymore subject to the approval, or for that matter, veto of
                                        the City Mayor. The reason for this is quite clear in the Code when it vested
                                        solely to the Sangguniang Panlungsod the power to hear and decide
                                        administrative cases against elective barangay officials. One may, however,
                                        wonder why under Section 63 of the Code, it is so provided that a
                                        preventive suspension is to be imposed by the Mayor. It is our considered
                                        position, as elucidated in DILG Opinion No. 44, s. 2004 (copy of which is
                                        hereto attached for reference) that while the power to determine as to
                                        whether or not the respondent should be placed under preventive suspension
                                        lies with the Sangguniang Panlungsod, the matter of imposition, however, is
                                        given to the Mayor considering that at that point in time, the respondent
                                        elective barangay official is still presumed innocent there being no decision
                                        yet in the administrative case, such that the preventive suspension has to be
                                        imposed by the Mayor being the supervisor of the concerned elective
                                        barangay official.
                                        May we take this opportunity of clarifying the role of the Sangguniang
                                        Panlungsod vis-ä-vis the City Mayor with respect to the imposition of
                                        preventive suspension. Although there is no Supreme Court ruling yet, there

                                        ****** Result for Image/Page 4 ******
                                        3
                                        was already a Court of Appeals ruling in the case of Matugas y—. Judge
                                        Buyser and Mayor Navarro (CA-G.R. SP No. 5560) where the Court of
                                        Appeals had the occasion to rule, in gist, that the determination of whether
                                        to place the respondent under preventive suspension or not, is with the
                                        Sanggunian. And once the Sanggunian directs the Mayor to impose the
                                        preventive suspension, it becomes ministerial on his part to impose the
                                        same.
                                        Foregoing considered, with regard to the first issue, we are of the
                                        view that the Mayors veto of such Sanggunian resolution imposing the
                                        preventive suspension upon the respondent Acting Punong Barangay, is
                                        bereft of any legal basis since said Resolution was issued by the
                                        Sangguniang Panlungsod in furtherance to its quasi-judicial functions.
                                        With regard to the second issue, we see no necessity for the
                                        Committee on Accountability of Public Officials, Ethics and Privileges to pass
                                        a new resolution recommending to the City Mayor to preventively suspend
                                        the concerned respondent barangay official. What should be done instead is
                                        for the Sangguniang Panlungsod to come up with another resolution asking
                                        the City Mayor to implement its previous resolution by imposing the 60-day
                                        preventive suspension against said respondent barangay official, as it is one
                                        of his functions and duties under Section 63 of the Local Government Code.
                                        We hope we have enlightened you on the matter.
                                        Very truly yours,
                                        W CELITO T. ANDANAR
                                        Undersecretarv
                                        Legal- 7/La
                                        Director Roberto C. Abejero
                                        cc:
                                        DILG Region IV-A
                                        Calderon Bldg., EDSA
                                        Diliman, Quezon City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-047S2006',
                    'reference' => 'LO-047S2006', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE PHILIPPINES
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNNIENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.,
                                        Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY
                                        October 25, 2006
                                        VICE MAYOR RUSSEL G. PLEYTO
                                        Sta. Maria, Bulacan
                                        Dear Vice Mayor Pleyto:
                                        This refers to your letter inquiring on whether or not resolutions of the Sangguniang
                                        Bayan approving reviewed barangay ordinances/resolutions are subject to the veto power of the
                                        Municipal Mayor.
                                        In reply thereto please be informed that actions of the Sangguniang Panlungsod or
                                        Sangguniang Bayan in the exercise of its review power per Section 57 of RA 7160, over
                                        approved ordinances or resolutions of the Barangay would no longer require the approval of the
                                        municipal mayor because his power to approve or disapprove legislative measures of the
                                        Sangguniang Bayan pertains only to those that were enacted by the Sangguniang Bayan of his
                                        municipality. The power to review barangay ordinances, as could be clearly seen from Section
                                        57 of the Local Government Code, is lodged solely to the Sanggunian Bayan.
                                        Such being the case, your practice of submitting to the mayor your sangguniang
                                        resolution approving or disapproving a barangay ordinance as consequence of the review power
                                        of the Sangguniang Bayan under Section 57 of the Local Government Code is considered a mere
                                        surplusage of procedure as the same is not even required by the Local Government Code.
                                        We hope that we have enlightened you on the matter.
                                        WE
                                        Very truly yours,
                                        ELITO T. ANDAN
                                        Undersecreta
                                        Dir. Josephine Castilla-GO
                                        DILG Regional Office No. 3
                                        San Fernando City, Pampanga',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-058S2008',
                    'reference' => 'LO-058S2008', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Cold condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OF UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        25 July 2008
                                        MAYOR JOEL AMADO A. DIESTRO
                                        Real, Quezon
                                        Dear Mayor Diestro,
                                        This has reference to your letter dated II April 2008 where the following sequence
                                        lof events are deducible, to wit:
                                        on 15 January 2008, you received a letter from Governor Nantes inviting vou to a
                                        meeting on 31 January to 1 February 2008 to be held at the provincial Capitol
                                        Lucena City.
                                        On 31 January 2008, the secretary of the Office of the Mayor received a copy of
                                        an enacted ordinance from the Sangguniang Bayan for your approval
                                        on 14 February 2008, you vetoed the said ordinance particularly items 2 and 3
                                        thereof and transmitted the veto message to the sanggunian on the same date.
                                        On 3 March 2008, the sangguniang Bayan neid that the veto on said items (1 and
                                        2) is ineffectual as it was exercised beyond the ten (10) day period provided for
                                        under Section 54 Of RA 7160 (The Local Government code).
                                        You take exception to this pronouncement contending that the ten (10) day
                                        period should be reckoned from 4 February 2008, the period/date you reported back to
                                        office (excluding February 2 and 3 which fell on Saturday and Sunday respectively) after
                                        your Official transaction with GOV. Nantes since it was only on that date (February 4)
                                        where the enacted ordinance of the Sangguniang Bayan was presented to you for your
                                        perusal and study. Thus, if properly reckoned from the aforementioned date (4 February
                                        2008), the veto on items 2 and 3, as well as the transmission of the veto message on 14
                                        February 2008, is well within the ten (10) day period as mandated under section 54 of RA
                                        17160, infra.
                                        As there is now an on going conflict of interpretation which may result in a
                                        prolonged impasse and divisiveness between the Office of the Mayor and Sanggunian,
                                        you now seek the Departments official stand on the matter
                                        Please be advised that the resolution of the issue before us hinges on the
                                        reasonable interpretation of Section 54 of the code (RA 7160) which provides, in part, viz:
                                        . (a) Every ordinance enacted by the
                                        "Section 54. Approval Of ordinances —
                                        sangguniang panlalawigan, sangguniang panlugsod, or sangguniang bayan shall be
                                        presented to the provincial governor or city or municipal mayor, as the case mav
                                        be. If the local chief executive concerned approves tne same, he snail affix his
                                        signature on each and every page thereof; otherwise, he Shall veto it and return the
                                        same with his objections to the sanggunian, which may proceed to reconsider the
                                        same. The sanggunian concerned may override tne veto of the local chief executive
                                        by two-third (2/3) vote of all its members, thereby making the ordinance or
                                        resolution effective for all legal intents and purposes.
                                        (b) The veto shall be communicated by the local chief executive concerned
                                        to the sanggunian within fifteen (15) days in tne case Of a province, and ten (10) days
                                        in the case of a city of a municipality; otherwise, the ordinance shall be déemed
                                        approved as if ne had signed it". (Underlining ours)

                                        ****** Result for Image/Page 2 ******
                                        We, at once note, that the statute utilized the word "presented", past tense form
                                        of the, word "present" which is defined by webster Dictionary as an act "to bring or
                                        introduce into the presence of someone". "Presentment", on the other hand, is the noun-
                                        word form of the same word (present) and is defined, likewise by Webster, as "the act of
                                        presenting to an authority a formal statement of a matter to be dealt with". Whether
                                        verb or noun, therefore, tne intent is unmistakable: to engender awareness on the part
                                        of the person to whom someone or something is presented. In the case of Delos Reyes vs.
                                        Sandiganbayan (281 SCRA 631), the Supreme Court held:
                                        "Contrary to petitioners belief, the grant of the veto power confers
                                        authority beyond the simple mechanical act of signing an ordinance or resolution,
                                        as a requisite to its enforceability. sucn power accords the local chief executive the
                                        discretion to sustain a resolution or ordinance in the first instance or to veto it and
                                        return it with his objections to the Sanggunian, which may proceed to reconsider
                                        the same. The sanggunian concerned, however, may override the veto by a two-
                                        thirds (2/3) vote Of all it members thereby making the ordinance or resolution
                                        effective for all legal intents and purposes. It is clear therefore that the
                                        concurrence of a local chief executive in the enactment Of an ordinance or
                                        resolution requires not onl a flourish of the pen but the application of
                                        judgment after meticulous analysis and intelligence as well". (Emphasis Ours)
                                        Congress arguably preferred tne word "presented" from its equally known
                                        counterparts such as delivered or submitted, as the former is more conducive to do
                                        homage or justice to that highlighted pnrase in tne above-cited decision.
                                        When is presentment deemed made? presentment is deemed fulfilled not only
                                        when a person is actually made aware of the presence of something or someone but so
                                        also when he is presumed to be aware or ought to be aware Of the same. For instance,
                                        presentment to a secretary, whose official duty is to receive official communication,
                                        documents and the like in the ordinary course of business - considered presentment to a
                                        principal-employer if the latter is physically present and is thus in a position to receive
                                        and make himself aware of said things. The fact that he ultimately and deliberately
                                        ignored what was delivered to the secretary is no argument for the presumed
                                        presentment that had already set in.
                                        Réckoned by these considerations and applying the same in your case, we hold
                                        that a mere receipt by your Secretary of the enacted ordinance is not within the scope of
                                        the concepts npresented" or "presentment" as it did not have the effect of placing or
                                        botting vou into a presumed awareness of the enacted ordinance. The reason for this is
                                        that, when the enacted ordinance was officially received by your secretary, you were not
                                        physically present on account of your meeting with the governor. Ergo, you could not be
                                        in position to make yourself aware of said enacted ordinance. That period came much
                                        later, on 4 February 2008 to be exact, when you reported back for work. As this was the
                                        date when the supposed enacted ordinance was presented or presumed presented to
                                        you, it follows tnat the ten (10) day period within which to veto the said enacted
                                        ordinance should rightfully be reckoned on this same even date. Applying the statutory
                                        accepted rule in counting days - which is excluding the first day and including the last -
                                        we note tnat the tenth day from 4 February 2008 is 14 February 2008. AS the veto was
                                        rpäde and communicated to the Sangguniang Bayan of Real Quezon on the said date (14
                                        February 2008), we nold the view that the veto was validly made.
                                        We hope we have enlightened you on the matter.
                                        Very truly yours,
                                        AUSTERE A. PANADERO
                                        Undersecretary for Local Governm',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-045S2008',
                    'reference' => 'LO-045S2008', // Ensure unique reference
                    'extracted_texts' => 'XENOR
                                        OIL G •
                                        REPUBLIC OF THE PHILIPPINES
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.,
                                        Diliman, Quezon City
                                        OF THE UNDQSEQETARY FOR LOCAL GOVERNMzT
                                        45
                                        OPINION NO.-.....—S. n..-„.
                                        18 June 2008
                                        VICE MAYOR MARIO O. SALVADOR
                                        San Jose City, Nueva Ecija
                                        Dear Vice Mayor Salvador:
                                        This refers to your request for this Departments opinion anent an
                                        issue involving the veto power of the Local Chief Executive on cert.ain items
                                        in an appropriations ordinance.
                                        In gist, you alleged that your Mayor, Hon. Marivic V. Belena, vetoed
                                        certain items on janitorial and general services in the City Vice Mayors
                                        office in your 2008 Appropriations Ordinance, which your SalW1nian,
                                        however, failed to ovenide. Nonetheless, it is your position that the items in
                                        ene 2007 Annual Appropriations corresponding to those items vetoed by the
                                        Mayor for FY 2008 are deemed re-enacted.
                                        Meantime, you reportedly hired personnel for Janitorial and Qeneral
                                        Services but the City Budget Office refused to confinn the said Job Order
                                        and instead refered the matter to the City Legal Officer, who in turn
                                        renderd his legal opinion, stating in part that: "xxx the Zast sentence of
                                        Section 55 refers to the reenactment of vetoed items such once
                                        veto has been overridden by 2/3 votes of au members of the
                                        Sangguniang Panlungsod concerned".
                                        In sum, your City Legal Officer was of the view, based on his 10 April
                                        2008 leuer to your City Budget Officer, that items found in the 2008 Annual
                                        Appropriations which were vetoed by the Local Chief Executive and which
                                        veto wæ not overridden by the Sanggunian will not result in the
                                        reenactrnent of the corresponding item found in the 2007 Appropriations
                                        Ordinance since the phrase "appropriation ordinance of the previous
                                        year" found in the last sentence of paragraph (b) of Section 55 pertains to

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        me proposed budget prepared in 2007 for fiscal year 2008 and submitted
                                        to the Local Chief Executive for approval.
                                        With all due respect, we beg to disagree with your City Legal Officers
                                        view. me wordings of Secåon 55 (b) of RA 7160 are rather clear and
                                        unequivocal to warrant any contrary view. The provision exactly states•
                                        "SEC. 55.
                                        Veto Power of the Local Chief
                                        Executiæ.- xzx (b) The ZocaZ chief executiæ, except the
                                        punong barangay, shall hate the power to t..eto any
                                        particular item or items of an appropriations
                                        ordinance, an ordinance or resolution adopting a Zocal
                                        development pZan and public investment program, or an
                                        ordinance directing the payment of money or creating
                                        liability. In such a case, the veto shalt not affect the
                                        item or items which are not objected to. The tetoed
                                        item or items shaZZ not take effect unless the
                                        sanggunian overrides the veto in the manner herein
                                        provided; otherwise, the item or items in the
                                        appropriations ordinance gf the previous year
                                        those vetoed, if gnu, shaZZ deemed
                                        reenacted." (underlining ours)
                                        The last paragraph of the above provision simply advances the rule
                                        that when the I oral Chief Executive exercises his/her line veto power in an
                                        enacted Annual Appropriations Ordinance, those items are simply left for
                                        naught. However, the Sanggunian concemed may or may not override the
                                        said veto, and when they override the same, it is the veto this åme which is
                                        left dead thereby making the vetoed item deemed approved by the Local
                                        Chief Executive. Definitely, if the Sangunian concemed succeeds in
                                        overriding me Locål Chief Executives veto, the vetoed items are considered
                                        already approved by the I ocal Chief Execuåve. If, however, the veto is not
                                        ovenidden by the Sanggunian, the item or items in the Appropriations
                                        Ordinance of the previous year corresponding to those vetoed, if any, shall
                                        be deemed reenacted. Along this line, the "appropriation ordinance of
                                        the previous year" definitely refers to the duly approved Appropriation
                                        Ordinance for Fiscal Year 2007 and not the proposed Annual Appropriation
                                        for Fiscal Year 2008 submitted to the Local Chief Executive for approval, as
                                        the I..egal Officer had opined. It would be absurd to accept the
                                        proposition that "reenactment" of the vetoed items in the budget

                                        ****** Result for Image/Page 3 ******
                                        ordinance will take place when the Sanggunian oven-ides the veto. As a
                                        of fact and law, there is no need to reenact when the vetoed items
                                        were already restored to its original place by means of overriding the veto
                                        since by doing so, the disapproved proposed item is deemed approved.
                                        It is, therefore, this Departments opinion that items in your 2007
                                        Appropriadons Ordinance corresponding to exactly the same items in your
                                        enaded 2008 Appropriations Ordinance which were vetoed by the Mayor,
                                        are deemed reenacted, if the said veto was not overridden by the
                                        Sanggunian concemed.
                                        We hope we have enlightened you on the matter.
                                        Very truly yours,
                                        AUSTERE A. PANADER
                                        Undersecretary
                                        cc: Director Josefina Castilla-Qo
                                        DU.Q omce No. 111
                                        San remando City, Pampanga
                                        Atty. Rainier R. Esguerra
                                        City Legal Offlcer
                                        City Hall, San Jose City
                                        Nueva Ecija',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-040S2008',
                    'reference' => 'LO-040S2008', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.
                                        Diliman, Quezon City
                                        OFFIlæ OF *ORIETARY
                                        04 June 2008
                                        MAYOR CELSO L. LOBREGAT
                                        Zamboanga City
                                        Dear Mayor Lobregat:
                                        Flhis pertains to your letter seeking our legal opinion on the following
                                        issues raised, to wit:
                                        1. "Is the contention of the Sanggunian that the word
                                        "VETO" should be written in the original copy of the
                                        proposed ordinance itself, a requirement in the
                                        implementation of the veto provisions in the Local
                                        Government Code?
                                        2. Given the fact that the Sanggunian has already
                                        deliberated the veto on March 26, 2008 but failed to
                                        put into votation the determination of the required
                                        two-thirds (2/3) vote to override the same, can they
                                        stilt override it later?
                                        3. Under Section 54 (b) of the Local Government Code,
                                        the chief executive is given a prescriptive period of
                                        ten (10) days from receipt of the proposed ordinance
                                        to communicate his veto to the Sanggunian. It
                                        appears, however, that the taw is silent on the
                                        prescriptive period on the part of the Sanggunian in
                                        As such, what is the
                                        overriding the same.
                                        prescriptive period for the Sanggunian to override
                                        the veto of the City Mayor, if any? Are there any
                                        laws, maes and regulations or jurisprudence which
                                        provides for such prescriptive period?"

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        In reply to your first query, may we invite your attention to Section 54
                                        (a) and (b) and Section 55 (a), both of the Local Govemment Code, which
                                        provide:
                                        "SEC. 54. Approval of Ordinances.-
                                        (a) Every
                                        ordinance enacted by the sangguniang panlatawigan,
                                        sangguniang panZungsod, or sangguniang bayan shaZt
                                        be presented to the provinciat governor or city or
                                        municipal mayor, as the case may be. If the Zocat chief
                                        executive concerned approves the same, he shaZZ affix
                                        his signature on each and every page thereof;
                                        otherwise, he shaZZ veto it and return the same with his
                                        objections to the sanggunian, which may proceed to
                                        reconsider the same. The sanggunian concerned may
                                        override the veto of the Zocal chief executive by two-
                                        thirds (2/3) vote of au its members, thereby making the
                                        ordinance or resolution effective for au ZegaZ intents
                                        and purposes.
                                        (b) The veto shaZZ be communicated by the Zocal
                                        chief executive concerned to the sanggunian within
                                        fifteen (15) days in the case of a province, and ten (10)
                                        days in the case of a city or a municipality, otherwise,
                                        the ordinance shalt be deemed approved as if he had
                                        signed it. "
                                        "SEC. 55.
                                        Veto Power of the Local Chief
                                        Executive.- (a) The tocai chief executive may veto any
                                        ordinance of the sangguniang panZaZawigan,
                                        sangguniang panZungsod, or sangguniang bayan on the
                                        ground that it is ultra vires or prejudicial to the public
                                        welfare, stating his reasons therefor in writing.
                                        A veto is defined as "the refusal of assent by the executive
                                        officer whose assent is necessary to perfect a Zaw which has been
                                        passed by the legislative body and the message which is usuaZZy
                                        sent to such body by the executive, stating such refusal and the
                                        reasons therefor" (Blacks Law Dictionary, 501 Ed., 1983).
                                        Under Section 54 of the Local Government Code, the grant of the veto
                                        power to a City Mayor confers upon him an authority beyond the simple

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        mechanical act of signing an ordinance, as a requisite to its approval. Such
                                        power accords the City Mayor the discretion to approve an ordinance in the
                                        first instance or to veto it and return it with his objections to the
                                        which may proceed to reconsider the same.
                                        Under Section 54 (a) of the same Code, if the City Mayor approves a
                                        proposed ordinance, he shall affix his signature in each and every page
                                        thereof; otherwise he shall veto it and return the same with his objections to
                                        the Sarumnian. Corollarily, Section 55 (a) of the Code requires that the
                                        veto shall be in writing, stating the reasons of his non-assent to the
                                        proposed ordinance on the ground that it is ultra vires or prejudicial to
                                        public welfare.
                                        It is clear, therefore, that to veto an ordinance is a separate act of the
                                        local chief executive apart from the act of returning the proposed ordinance
                                        to the Sanggunian. The exercise of the veto power by the City Mayor would
                                        require a veto message in writing, stating the reasons for his objections to
                                        the proposed ordinance. Precisely, Section 54 (b) of the Code requires that
                                        the veto, definitely referring to the veto message in writing, shall be
                                        communicated by the local chief executive concerned to the Sanggunian
                                        within ten (10) days in the case of a city; otherwise, the ordinance shall be
                                        deemed approved as if he had signed it.
                                        The contention, therefore, of the Sanggunian that the word "veto"
                                        should have been written in the original copy of the proposed ordinance
                                        itself as required by the veto provision of the Local Government Code is
                                        erroneous. The veto power of the City Mayor is complete and duly exercised
                                        when he communicated his written veto message to the Sanggunian coupled
                                        with the act of returning the proposed ordinance unsigned. The Local
                                        Government Code or its Implementing Rules and Regulations does not
                                        require that the word veto be written in the copy of the proposed
                                        ordinance, as precisely a veto message is a separate document
                                        communicated to the Sanggunian, together with the uns@led proposed
                                        ordinance, that would guide the Sanggunian in proceeding whether to
                                        override the veto or not.
                                        In reply to your second and third queries, may we note that the Local
                                        Government Code did not provide for a presciptive period within which for
                                        the Sanggunian to override a particular veto of the local chief executive. We

                                        ****** Result for Image/Page 4 ******
                                        -4-
                                        have also not yet encountered any law or jurisprudence that provides for the
                                        same. We, however, believe that as an incident to the delegated legislative
                                        power of the present Sanggunian, the time to exercise the power to ovenide
                                        a veto is subsumed with the corresponding term of the Sanggunian
                                        concemed.
                                        We hope we have enlightened you on the matter.
                                        Very truly yours,
                                        AUSTERE A. PANADER
                                        Acting Secre
                                        cc: Director Loreto T. Bhagwani
                                        DILO Regional Office No. IX
                                        Zamboanga City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-034S2008',
                    'reference' => 'LO-034S2008', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.
                                        Diliman, Quezon City
                                        OFFIæ OF
                                        _34 S 8
                                        19 May 2008
                                        VICE MAYOR MARIO O. SALVADOR
                                        San Jose City, Nueva Ecija
                                        Dear Vice Mayor Salvador:
                                        This refers to your letter requesting this Departments opinion anent
                                        an issue involving the veto power of the Local Chief Executive on items of
                                        an oqdfionce.
                                        In gist, you alleged that your Mayor, Hon. Marivic V, Belena, vetoed
                                        certain items of the City Vice Mayors office in your 2008 Appropriations
                                        Ordinance, which your Sanggunian, however, failed to override,
                                        Nonetheless, it is your position that the items in the 2007 Annual
                                        Appropriations containing same items vetoed by the Mayor for FY 2008
                                        are deemed re-enacted.
                                        Meantime, you reportedly hired personnel for Janitorial and
                                        General Services but the City Budget Office refused to confirm the said
                                        Job Order and instead referred the matter to the City Legal Officer. You,
                                        however, failed to mention the reason why the City Budget Officer
                                        refused to confirm the Job Order. Hence, we are in a quandary as to the
                                        nature of the referral made by the City Budget Officer to the City Legal
                                        Officer.
                                        Be that as it may, may we inform you that Section 55 (b) of RA 7160
                                        of the Local Government Code of 1991 needs no further interpretation as
                                        the language of the law is very clear and self-explanatory when it
                                        provided that, thus:
                                        "SEC. 55.
                                        Veto Power of the Local Chief
                                        Executive.- xxx (b) The Zocal chief executive, except the

                                        ****** Result for Image/Page 2 ******
                                        2-
                                        punong barangay, shall have the power to veto any
                                        particular item or items of an appropriations
                                        ordinance, an ordinance or resolution adopting a Zocal
                                        development plan and public investment program, or an
                                        ordinance directing the payment of money or creating
                                        liability. In such a case, the veto shaZZ not affect the
                                        item or items which are not objected to. The vetoed
                                        item items shaZZ not take effect unless the
                                        sanggunian overrides the veto the manner herein
                                        provided; otherwise, the item gr items the
                                        appropriations ordinance Of the previous year
                                        -C-Q.r-r-.e.SP.QLding CQ those vetoed, guy, shall be deemed
                                        reenacted." (underlining ours)
                                        However, while this Department can give an opinion thereon if only
                                        to satisfy your request, administrative protocol and professional courtesy
                                        dictate that we first await the legat opinion of your City Legal Officer,
                                        based on the latters mandate under Section 481 (b) (3) (iii) of RA 7160
                                        which reads: "Render his opinion in writing on any question of Zaw
                                        when requested to do so by the governor, mayor, or sanggunian".
                                        Hence, please be advised that we shall defer rendering our opinion
                                        on your request until after your City Legal Officer shall have issued his
                                        opinion,
                                        Thank you.
                                        Very truly yours,
                                        AUSTERE A. PANADER
                                        Acting Secretary V
                                        Legal:87/La
                                        Director Josefina Castilla-Go
                                        cc:
                                        DILG Regional Office No. Ill
                                        San Fernando City, Pampanga',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-002S2008',
                    'reference' => 'LO-002S2008', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE PH IPPINES
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDS cor. Mapagmahal St.,
                                        Diliman, Quezon C
                                        OFFIC OF L CAL GOVERNMENT
                                        02
                                        05 February 2008
                                        MAYOR SONIA TORRES AQUINO
                                        Tanauan City
                                        Dear Mayor Aquino:
                                        This pertains to your letter requesting or leg opinion relative to City
                                        Ordinance No. 07-8 enacted on 26 Novem er 2 07 by the
                                        Panlungsod of Tanauan City, entitled: "An rdinance Requiring All Owners
                                        of Lands or Buildings, All Persons Possessin Intere ts Therein, Contractors,
                                        or Developers to Secure the Concurrence f the angguniang Panlungsod
                                        Prior to Introducing Any Commercial r Ind strial Construction or
                                        Renovation", which you vetoed as evidenced by your attached Veto Message
                                        for being ultra vires and/or prejudicial to pub
                                        As could be gleaned from the pro
                                        appears that said Ordinance requires the c
                                        Panlungsod as a prerequisite for the intro
                                        renovation on any land or building within t
                                        City for commercial or industrial purposes. I
                                        the Building Official to submit to the San
                                        building permit. Said Ordinance further
                                        owners/persons possessing interest over th
                                        contractors and developers concerned to s
                                        the Sangguniang Panlungsod before intr
                                        renovation thereon.
                                        •c inte est.
                                        osed rdinance No. 07-8, it
                                        ncurrence of the
                                        uction of any construction or
                                        e te • orial jurisdiction of the
                                        required the City Engineer and
                                        nian he list of applicants for
                                        ade it a duty on all property
                                        land qr building concerned or
                                        cure
                                        ducin
                                        In reply to your query, please be info ed
                                        your contentions on the legal infirmities f the
                                        contained in your Veto Message sent to the anggu
                                        December 2007.
                                        e prior concurrence of
                                        any construction or
                                        at we fully concur with
                                        roposed Ordinance as
                                        ang Panlungsod on 17

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        Moreover, it is not amiss to point out t the ssuance, non-issuance,
                                        revocation, cancellation or suspension of bu ding ermits is governed by
                                        the pertinent provisions of the National Bu Iding ode. Under the said
                                        National Building Code, it is the City Build g Offi ial who exercises the
                                        discretion whether or not to issue the buildi g pe it, after determining if
                                        the technical requirements under said Code ere duly complied with by the
                                        applicant. It is even worth emphasizing that e decision of the City Building
                                        Official, with respect to issuance of building permi
                                        is appealable not to
                                        the City Mayor but to the Secretary of Public Wor and Highways per the
                                        pertinent provisions of the National Building de.
                                        Along this line, we fully concur with you citati n in your Veto Message
                                        of the case of Villacorta vs. Bernardo (143 S RA 48 ), where the Supreme
                                        Court invalidated a city ordinance for being Itra res and not consistent
                                        with national laws when it required the sub ission of subdivision plans to
                                        the City Engineer before the same is su
                                        mitte for approval to and
                                        verification by the General Land Registratio
                                        Offic or by the Director of
                                        Lands when Act No. 496, which is natio
                                        al law did not require such
                                        submission. The Ordinance, therefore, effec •vely ended a general law,
                                        which is Act No. 496. In effect, the Supreme
                                        urt nunciated the principle
                                        that an ordinance cannot provide addition
                                        requi ements on top of the
                                        requirements already required under a natio
                                        al law as it shall impede the
                                        exercise of rights granted in a general la
                                        and/ r make a general law
                                        subordinated to a local ordinance.
                                        Under the Local Government Code, p
                                        •cularly Section 48 thereof,
                                        Congress, vested by the Constitution with th
                                        power to legislate, delegated
                                        to the different Sanggunians below the pow
                                        ordinances. Hence, since the Sanggunians
                                        legislative powers, it can never rise above Co
                                        power to legislate. Stated differently, ordin
                                        always be consistent with national laws an
                                        being merely subordinated power of legislatio
                                        Pryce Properties, Inc. (Q.R. No. 111097, 20 J
                                        ruled that an ordinance must not be contr
                                        national laws.
                                        We even observed that the proposed
                                        on the ground that it is against public poli
                                        Municipality of Virac, Catanduanes (207 SC
                                        r tol
                                        e sim
                                        gress
                                        ces b
                                        cann
                                        In
                                        ly 19
                                        to
                                        rdin
                                        157)
                                        gislate their own local
                                        ly exercising delegated
                                        ho is the owner of the
                                        the Sanggunians must
                                        t run counter thereto
                                        e case of Magtqjas vs.
                                        4), the Supreme Court
                                        e Constitution and the
                                        ce may be challenged
                                        the case of Tatel vs.
                                        d in Solicitor General

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        vs. NMDA (204 SCRA 837), the Supreme Co rt rule that for an ordinance
                                        to be valid, the same, among others, must be onsist nt with public policy.
                                        In this regard, it is wise to examine the recent law, which is RA 9485,
                                        entitled: "An Act to Improve Efficiency in the D livery of Government
                                        Service to the Public by Reducing Bureaucra c Red Tape, Preventing Graft
                                        and Corruption, and Providing Penalties T erefo
                                        Section 2 thereof
                                        provides for the declared policy of the State, wit:
                                        "SEC. 2. Declaration of P Zicy.- It is hereby
                                        declared the policy of the State o pro ote integrity,
                                        accountability, proper manageme t of public affairs
                                        and public property as well as o est blish effective
                                        practices aimed at the preve tion of graft and
                                        corruption in government. Towar s this end, the State
                                        shall maintain honesty and resp nsibility among its
                                        shall take
                                        public officials and employee ,
                                        an
                                        appropriate measures to promote ransp rency in each
                                        agency with regard to the manne of tr nsacting with
                                        the public, which shall encompa a p ogram for the
                                        adoption of simplified procedures that ill reduce red
                                        tape and expedite transactions in overn ent. "
                                        In this regard, the proposed Ordinance which was vetoed by the City
                                        Mayor, may run counter to the declared policy of the tate as aforestated.
                                        We hope to have enlightened you on th matt r.
                                        Very truly yours,
                                        A STERE A. PANADERO
                                        Undersecre
                                        taw
                                        Legal;43/La
                                        cc:
                                        Director Roberto C. Abejero
                                        DILQ Regional Office No. IV-A
                                        FTI Complex, Taguig City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-022S2006',
                    'reference' => 'LO-022S2006', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II, EDSA
                                        cor. St., Diliman, Quezon City
                                        OFFICE OF UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        -22—S.
                                        05 May 2006
                                        ATTY. P. DARIO GUEVARRA
                                        City Legal Officer
                                        Tanauan City
                                        Dear Atty. Guevarra:
                                        This refers to your request for legal opinion regarding Section 345 of the
                                        Local Government Code (RA 7160) which provides for the signatories to checks,
                                        i.e., treasurer and administrator, considering the fact that Tanauan City has no
                                        local administrator yet.
                                        In reply to your query, please be informed that Section 345 of RA 7160
                                        clearly mandates that checks in settlement of obligations shall be drawn by the
                                        local treasurer and countersigned by the local administrator. However, the
                                        permanent absence of the local administrator, not having been appointed yet,
                                        should not be a hindrance for the local government unit to transact its usual
                                        business, as it is a well-entrenched rule that the law does not require the
                                        impossible.
                                        Such being the case, we are of the opinion that the City Mayor can directly
                                        perform the functions of the local administrator based on her statutory function to
                                        "exercise general supervision and control over att programs,
                                        projects, services and activities of the city government" (Sec. 445 [bl
                                        111, RA 7160).
                                        Ergo, the City Mayor has enough authority to countersign the checks drawn
                                        by the City Treasurer until such time that the City Administrator is appointed.
                                        Parenthetically, please be reminded that the appointment oi an
                                        Administrator is mandatory for city governments (Sec. 480 [al [31, RA 7160), thus
                                        we enjoin your city to comply with the same.
                                        We hope we have enlightened you accordingly.
                                        Very truly yours,
                                        NCEUTO T. ANDANAR
                                        Undersecretar
                                        Legal:87/La
                                        Director Roberto C. Abejero
                                        cc:
                                        DILG Regional Office IV-A
                                        Taguig City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-037S2006',
                    'reference' => 'LO-037S2006', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        B. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY
                                        n
                                        MR. ROSENDO A. MORALES
                                        August 07, 2006
                                        Secretary to the Sangguniang Panlungsod
                                        Calbayog City
                                        Dear Mr. Morales:
                                        This has reference to your earlier letter in connection with the publication of yo r
                                        city ordinances with penal sanctions in a newspaper of general circulation as requir
                                        under Section 511 of the Local Government Code of 1991 (RA 7160) and Article 11
                                        Rule XVII of its Impiennenting Rules and Regulations.
                                        In your letter, you manifested that the Sangguniang Panlungsod of Calbayog ha
                                        decided to publish all approved city ordinances in Leyte Samar Daily Express,
                                        newspaper of general circulation in Region VIII based on the Resolution issued by th
                                        Office of the Executive Judge, Regional Trial Court, 8 h Judicial Region, Branch 32, H II
                                        of Justice, Calbayog City. Said Resolution of the Executive Judge classified the Leyt
                                        Samar Daily Express as a newspaper of general circulation on the premise that it
                                        accredited to be the first and only daily newspaper circulating in Region VIII and h
                                        been in existence for almost eighteen (18) years.
                                        Several newspapers were recently established but are existing only for about
                                        year or less with two (2) to four (4) issues a month. The publishers of these newl
                                        established newspapers approached and requested you that the city ordinances b
                                        instead published in their respective newspapers. You thought of accommodating the
                                        but you wanted first to seek our legal opinion on the following queries which we quote
                                        herein in toto.

                                        ****** Result for Image/Page 2 ******
                                        (2)
                                        (3)
                                        /s accreditation of a newspaper necessary?
                                        Is there a need for a track record?
                                        What does "newspaper of genera/ circulation" mean ?
                                        In the event that you have decided to transfer the publication of city ordinance
                                        from a daily newspaper issue to that of a weekly or a monthly issue, you again asked a
                                        additional query on whether or not in doing so; you will violate any provisions of law.
                                        At the outset, please be informed that Article 114 (Rule X VII) of the Rules an
                                        Regulations Implementing the Local Government Code of 1991 pertains to posting an
                                        publication of ordinance with penal sanctions and not Article 122 (Rule XVIII), as cited i
                                        your letter.
                                        Article 114 (Rule XVII) of the IRR provides that:
                                        "ART. 114. Posting and Publication of Ordinance with Penal
                                        Sanctions.—(a) Ordinances with penal sanctions shall be posted at
                                        prominent places in the provincial capitol, city, municipal or barangay hall,
                                        as the case may be, for a minimum period of three (3) consecutive weeks.
                                        Such ordinances shall also be published in a newspaper of genera/
                                        circulation, where available, within the territorial iurisdiction of the local
                                        government unit concerned, except in the case of barangav ordinances.
                                        Unless otherwise provided therein, said ordinances shall take effect on the
                                        day following its publication, or at the end of the period of posting,
                                        whichever occurs later.
                                        xxx
                                        xxx
                                        xxx
                                        (Emphasis Supplied)
                                        Based on the foregoing; in order that publication of ordinances with pen I
                                        sanctions is complied with, it is required that "such ordinances must be published in
                                        newspaper of genera/ circulation, where available, within the territorial jurisdiction of th
                                        local govenunent unit concerned, except in the case of barangay ordinances".
                                        Anent your queries, we shall answer first your third query
                                        As to what constitute a newspaper of general circulation, the Supreme COUIt ha
                                        an opportunity to enumerate the requirements thereof in the case of
                                        Fortune Motor
                                        (Phils.), Inc. vs. Metropolitan Bank and Trust Company and CA [265 SC
                                        72(1996)] citing Bonnevie vs. Court of Appeals [125 SCRA 122 (1983)], to wit:
                                        To be a newspaper of general circulation, it is enough that it is
                                        published for the dissemination of local news and general infonnation; that
                                        it has a bona fide subscription list of paving subscribers; that it is
                                        published at regular intewa/s (Basa v. Mercado, 61 Phil. 632) The

                                        ****** Result for Image/Page 3 ******
                                        newspaper need not have the largest circulation so long as it is of genera/
                                        circulation. (Banta v. Pacheco, 74 Phil. 67)." (Emphasis Supplied)
                                        Hence, for as long as the newspaper meets the minimum requirements set fort
                                        under the abovecited Bonnevie and Fortune Motors cases as to what constitutes
                                        newspaper of general circulation, itis our view that accreditation and track record aske
                                        in your first and second queries, respectively, are no Longer necessary in order for
                                        newspaper to be considered as a newspaper of genera circulation. It is enough th
                                        the newspaper is (1) published for the dissemination of local news and gener I
                                        information; (2) it has a bona fide subscription list of paying subscribers; and (3) it i
                                        published at regular intervals.
                                        Finally, if you choose to transfer the publication of city ordinances from a dail
                                        newspaper issue to that of a weekly or a monthly issue, it is our view that, with respe
                                        to the requirement of publication under Section 511 of the Local Government Code, n
                                        law will be violated. The Bonnevie and Fortune Motors cases only require that th
                                        publication be made at regular Intervals. The term "regular intervals" is too general a
                                        to encompass even a weekly or monthly issue. Furthermore, Article 114 of the IRR di
                                        not expressly provide that the newspaper must be of daily issue. Hence, newspaper
                                        that issue publications in a monthly or weekly basis may still qualify as a newspaper
                                        general circulation as it is published at regular intervals.
                                        We hope that we have addressed your concern accordingly.
                                        Very truly yours,
                                        CELITO T. ANDANAR
                                        J) dersecretary for Administration:
                                        Legal & Legislative I-ia•sov
                                        Legal: 17',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-006S2005',
                    'reference' => 'LO-006S2005', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II, EDSA
                                        cor. St., Diliman, Quezon City
                                        OF SEC#TARY
                                        OPINION NO.-Æ—S. 2001—
                                        28 January 2005
                                        HON. ARIEL P. LIM
                                        Presidentihi Special Assistant
                                        Office of the Presidential Special Assistant
                                        for Tricycle Transport Affairs
                                        Office of the Presidential Adviser for Political Affairs
                                        Room 403 Tahanan ng Masa Building
                                        Office of the President
                                        Malacafiang, Manila
                                        Dear Sir:
                                        This refers to your earlier letter requesting for our legal opinion on
                                        certain Issues confronting the operation of tricycle in Lapu-Lapu City.
                                        As represented in your letter, it appears that the City Qovernment of
                                        Lapu-Lapu has previously enacted City Ordinance No. 299-97 on 26
                                        February 1997, designating a tricycle lane for public tricycles passing the
                                        Quezon National Highway In that city.
                                        However, on 23 July 2004, Mayor Arturo O. Radaza issued Executive
                                        Order No. 2004-32 suspending the implementation of Ordinance No. 299-97
                                        and prohibiting the tricycles used for public transport from passing the said
                                        highway apparently in response to the transport strike conducted by the
                                        Lapu Lapu City Confederation of Tricycle Operators and Drivers Association,
                                        Inc. (LACTODA) as a protest over the undue delay in the consideration and
                                        approval of their petition for fare aqjustment submitted to the local
                                        govemment unit.
                                        Based on the foregoing, you would want to solicit our
                                        opinion/c&nment, particularly on the following queries, to wit:
                                        1. "Whether or not the City Mayor is empowered under
                                        the Locat Government Code or any other statute to
                                        unilaterally suspend the implementation of a city
                                        ordinance validly enacted by the locat government
                                        unit more than Feven years ago and was in fuzz
                                        effect before the suspension.
                                        2. Whether or not the act of the Mayor in suspending
                                        City Ordinance No. 299-97 is valid under the Local
                                        Government Code or any other applicable law.

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        3. Whether or not under the foregoing circumstances,
                                        the City Mayor has exceeded its powers under the
                                        Locat Government Code by suspending Executive
                                        Order No. 2004-32 apparently as his response to the
                                        tricycle sectors constitutional right to peaceably
                                        protest the local government for the redress of their
                                        grievances.
                                        4. Whether or not the tenor of Executive Order No.

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        tricycle lane using a portion of the highWay within the city, the City Mayor
                                        acted without or in excess of jurisdiction.
                                        We hope that we have enlightened you on the matter.
                                        Very truly yours,
                                        ANGELO T. REYES
                                        Secre
                                        tarv
                                        DEPARTMENT OF INTERIOR
                                        ANO LOCAL GOVERNMENT
                                        IN REPLYING. PLS
                                        SILG05-003716
                                        Legal:72/1a
                                        copy fumlshed:
                                        The Panlungsod
                                        Ihru: The Presiding Officer
                                        City Hall, Lapu Lapu City
                                        Director Roberto C. Abejero
                                        Region VII
                                        Cebu City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-021S2005',
                    'reference' => 'LO-021S2005', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        or THE INTERIOR AND LOCAL
                                        A. isco •
                                        col.
                                        I ilirnan, Quezon City
                                        Olf
                                        OPINION ? J
                                        11
                                        C. REYNERA
                                        , ton. Federico S. Sandovai It
                                        •louse of Representatives
                                        I-tills, Diliman
                                        Vuezon City
                                        t)ear Mr. Reynera:
                                        This pertains to your letter requesting for the Departments legal opinion
                                        clarification on whether Municipal Ordinance No. 03-s-94 of Dasmariäas, Cavite, i;
                                        and enforceable in view of the passage of Provincial Ordinance No. 2002-0
                                        or Lhe Province of Cavite.
                                        You stated that the Province of Cavite came up with an Ordinance on 28
                                        October 2002, providing that "no video or computer games arcades/shops
                                        shall be operated within the 300-meter radius from any schools and
                                        other educational institutions and from any church or any pZace
                                        worship in the Province of Cavite. However, any municipal or city could
                                        set up, through a form of a municipal/city Ordinance, their respectiv
                                        rnstriction on the allowable distance of a com uter video ames

                                        ****** Result for Image/Page 2 ******
                                        ar
                                        -2-
                                        ungguniang Panlungsod, with respect to cities; the Sangguniang Bayan, with
                                        n•uanicipalities; and the Sangguniang Barangay, with respect to the bCii
                                        • legisiative bodies below. It is clear, therefore, that the sanggunian
                                        exercising delegated legislative powers and, accordirjgiy, the
                                        ise of such power is still with Congress. Precisely, it may be well L I i(-aL
                                        can at any time repeal or modify local ordinances. A corollary issue may thus
                                        asked on whether or not a provincial ordinance can repeal a municipal ordinance.
                                        We answer in the negative.
                                        The power of the legislative body to repeal a particular measure pertains only
                                        . Iepeal of a which that scnue body earlier enacted or a mean l, e
                                        tower legislative body over v.liicii l control. May we note ili
                                        . . R the Surigguniang Panlalawigan, in sarme state of things with
                                        Bayan, is merely exercising a delegated legislative .
                                        Eii(.jguniang Panlalawigan and the Sangguniang Bayan got their ,
                                        . congress. The Sangguniang Panlaiawigan, therefore, has no conti oi ovel ie,vvci
                                        . -augunians as the same is retained by Congress over all legislative bodies. What
                                        • ;iven by Congress to the Sangguniang Panlalawigan is the power to review municipal
                                        ordinances or resolutions approving the local development plans or public investment
                                        programs pursuant to Section 56 of RA 7160, which cannot be stretched to include the
                                        power to repeal. Accordingly, Municipal Ordinance No. 03-s-94 of the
                                        Bayan of Dasmarinas, Cavite, is
                                        still considered in force and enfore
                                        ,ötwithstanding the issuance Of Provincial Ordinance NO. 2002-003.
                                        • finances can be given full. force anci effect in their respective territorÅ.i
                                        we point out, however, that in case of violation of the provinciuj u;
                                        unance, the violator can only be proceeded or prosecuted against for violation of
                                        :iLher of the two ordinances. This is consistent with the constitutional mandate that
                                        ••no person shall be twice put in jeopardy of punishment for the same
                                        of ense
                                        TO illustrate, for instance, a businessman would put up a computer video
                                        a distance of 250-meter radius frotll any church, then he can be prosecuted
                                        : for violation of the provincial ordinance since it is within the 300-meter
                                        under the municipal ordinance since the distance is beyond the 200
                                        ir, however, the businessman would put up a computer video game .
                                        from any church, then, clearly, there is here a violation of the
                                        Jt•ovinciai ordinances. However, in line with the constitutional guac
                                        double jeopurdy, the businessman Inay only be prosecuted for violation either
                                        l.unicipal ordinance the provincial ordinance.
                                        May we, however, point out that the subject matter of the provincial ordinance
                                        is the regulation only of video or computer games arcades/shops, while the subject
                                        matter of the municipal ordinance is broader as it provides for regulation with respect
                                        to video game centers, billiard halls, or any amusement of the same nature.
                                        We hope we have enlightened you on the matter.
                                        Legal:43/La
                                        cc:
                                        Very truly yours,
                                        A GE OT. REYES
                                        Secretary
                                        DEPARTMENI OF THE
                                        LOCAL GOVERNMENT
                                        IN PLS CITE:
                                        SILG05-004816
                                        Director Leonilo B. Lariosa
                                        DILG Region IV-A, Calderon Bldg.
                                        EDSA, Dilinnan, Quezon City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-022S2005',
                    'reference' => 'LO-022S2005', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE Pl
                                        DEPARTMENT or TIIE INTERIOR AND LOCAL GOVE
                                        A. Francisco Gold Condoniiniurn l! Edsa Cor. Mapaynahal St.
                                        I)ililnan. City
                                        OFFICE OF •IHF„ SECRETA 10
                                        OPINION NO 22
                                        March 15, 2005
                                        BARANGAY DOMINGO A. PALAGANAS
                                        Barangay 173, Congress Village
                                        North Caloocan City
                                        Dear Sir:
                                        s. 200}.
                                        This pertains to your letter seeking our legal opinion regarding the
                                        propriety of Proposed Resolution No. 40 of the Sangguniang Barangay of
                                        Barangay 173, Congress Village, North Caloocan City, entitled "RESOLUTION
                                        RECOMM@ DING TO THE HONORABLE CITY MAYOR ENRICO "RECOM•
                                        ECHIVERRI THE APPOINTMENT OF PELAGIC) V. BALUBAR AS KAGAWAD
                                        TO REPLACE FORMER KAGAWAD EMMA BAFUL.
                                        It appears from your letter that since November 2002, Kagawad Emma
                                        Baful has not attended the Sanggunian Barangays sessions and until now, her
                                        whereabouts are still unknown. This prompted the said sanggunian to file an
                                        administrative charge against her for abandonment of official duties, through
                                        Resolution No, 08-203 dated 8 February 2003. The. case is still pending with the
                                        Sangguniang Panlungsod of Caloocan City as of this time.
                                        You also attached in your letter a copy of Resolution No. 64 of your
                                        Sanggunian Barangay, dated 24 August 2004, resolving not to fill up the position
                                        held by Kagawad Baful in the event that the same is to be declared vacant by the
                                        Sangguniang Panlungsod of Caloocan City. However, on September 2004, the
                                        Sangguniang Barangay of Barangay 173 issued Resolution No. 40
                                        recommending Mr. Pelagio V. Batubar as replacement of Kagawad Baful.
                                        allegedly without your prior nomination
                                        You now posit the following queries:
                                        1) Is the position vacant?
                                        Resolution No. 40 valid and proper considering that the
                                        2)
                                        members of the Sanggun• ng Barangay recommended a certain
                                        person (Mr. Pelagio V. Balubar) without the nomination of the
                                        Punong Barangay?
                                        3) Is it not the Punong Barangay authorized to submit his nominee
                                        to the Sangguniang Barangay for confirmation?
                                        4) Is Section 45(3) which provides that "the city or municipal
                                        mayor, in the case of Sangguniang Barangay,
                                        upon

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        recommendation of the Sangguniang Barangay concerned,"
                                        vague considering that such can be susceptible of conflicting
                                        interpretations?
                                        Anent your first query, we are of the considered view that such position is
                                        vacant but only temporary. There exists a temporary vacancy in said position in
                                        view of the fact that the prolonged unauthorized absence of Kagawad Baful
                                        can only be deemed as "temporary incapacity to perform duties for physical
                                        reasons" per Section 46(a) of the Local Government Code. The situation will not
                                        qualify as a permanent vacancy under Section 44 of RA 7160 (Local Government
                                        Code of 1991), because "permanent vacancy arises when an elected local
                                        official fills a higher vacant office, refuses to assume office, fails to qualify,
                                        dies, is removed from office, voluntary resigns, or is otherwise
                                        permanently incapacitated to discharge the functions of his office
                                        Kagawad Bafuls situation does not fall under any of the above-mentioned
                                        circumstances. Even assuming arguendo that Kagawad Bafuls act can be
                                        deemed as refusal to assume office, for it to qualify as a permanent vacancy,
                                        such refusal must be categorically declared and clearly shown, not merely
                                        implied from the acts of the local official. Neither can it be deemed as "removal
                                        from office" as such requires an order of the proper court as a result of an
                                        administrative adjudication on grounds provided by RA 7160 (Section 60) as
                                        declared in the case of Pablico v- Villapando (385 SCRA 601
                                        It is well to note
                                        that the administrative case filed against Kagawad Baful is still pending as of the
                                        present.
                                        Hence, the act of the Sangguniang Barangay of recommending Mr.
                                        Pelagio Balubar as Kagawad Bafuls replacement is premature in view of the fact
                                        that there exists no permanent vacancy yet. Appointment to a vacant position is
                                        proper only in case a permanent vacuum in the position exists. Thus, with
                                        respect to your second query, Resolution No. 40 is not valid and proper, not
                                        because there was no recommendation given by the Punong Barangay since the
                                        same is not required by law, but because such act is premature there being no
                                        permanent vacancy yet in the Sangguniang Barangay that would call for the
                                        application of Section 45(a)(3). Corollarily, your third question must also be
                                        answered in the negative, because granting arguendo that a permanent vacancy
                                        exists, what is provided for by law under Section 45(a)(3) of RA 7160, is that the
                                        appointment in case of vacancy in the Sangguniang Barangay, must be made by
                                        the city mayor concerned upon the recommendation of the Sangguniang
                                        barangay concerned (underscoring ours). Nothing in the law provides for the
                                        Punong Barangay to issue such nomination before the nominee be
                                        recommended by the sangguniang barangay or be appointed by the local chief
                                        executive (the city mayor).
                                        In relation thereto, as to your fourth contention that Section 45(a)(3) is
                                        susceptible of various interpretations, we are of the considered view that the
                                        above-cited provision is clear and unambiguous. Section 45(a)(3) of RA 7160
                                        provides:
                                        "Section 45. Permanent Vacancies in the Sanggunian.
                                        (a) Permanent vacancies in the sanggunian where automatic
                                        successions provided above do not apply shall be filled by
                                        appointment in the following manner:
                                        xxx
                                        xxx
                                        xxx

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        (3) The city or municipal mayor in the case of
                                        sangguniang barangay, upon recommendation of the
                                        sanggunianq baranqay concerned." (underscoring ours)
                                        From the foregoing, it is clear that in cases wherein automatic succession
                                        does not apply, a permanent vacancy in the sangguniang barangay is to be filled
                                        by appointment by the mayor, upon prior recommendation of the sangguniang
                                        barangay concerned. We must emphasize that the required prior
                                        recommendation is a collective act of the sanggunian, and we see no provision
                                        that the Punong Barangay shall first nominate whereupon such recommendation
                                        is to be based- Hence, the questioned provision does not suffer from ambiguity.
                                        We hope we have enlightened you on the matter.
                                        Ve
                                        ruly yours,
                                        cc:
                                        DIRECTOR SERAFIN M. BE-NALDO
                                        DILG - NCR
                                        Ground Floor, LMP Building
                                        Ermin Garcia Street
                                        Cubao, Quezon City
                                        ANGELO . REYES
                                        Secretary
                                        DEPARTMENT O; NE INTERIOR
                                        AND LOCAL GOVERNMENT
                                        INREPtYIUG. PLS CITE.
                                        SILG05-005054
                                        Legal:86/Merle',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-030S2005',
                    'reference' => 'LO-030S2005', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II, EDSA
                                        cor. Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF SECRETARY
                                        DtLG OPINION NO. S. 200=-
                                        09 May 2005
                                        PUNONG BARANGAY MANUEL G. ALIPON
                                        Barangay Balibago, Sta. Rosa City
                                        Laguna
                                        Dear Sir:
                                        This pertains to your request for legal opinion in the matter of
                                        barangay ordinances allegedly not duly acted upon by the Sangguniang
                                        Panlungsod within the prescribed period when submitted to it for review.
                                        In your letter, you stated that in several instances, ordinances passed
                                        by the Sangguniang Barangay of Balibago which were then submitted to the
                                        Sangguniang Panlungsod of Santa Rosa City for review and/or approval,
                                        were not acted upon except for referral to concemed committees and as a
                                        consequence of which, the prescribed period of thirty (30) days for its
                                        review has lapsed.
                                        Alleging that nonaction on most important measures caused the
                                        barangay leaders non-delivery or delay in the delivery of services to your
                                        constituents, you now pose the following queries:
                                        1. Can the Barangay of Balibago implement the
                                        unanimously approved barangay ordinances, taking
                                        into account that they are consistent with existing
                                        laws, rules and regulations?
                                        2. What is the status of ordinance/s enacted and
                                        approved by the Barangay but have not been acted
                                        upon, taking into consideration that the prescribed
                                        30-day period has already lapsed?
                                        3. What is the liability on the part of the Sangguniang
                                        Pantungsod?
                                        In reply thereto, an examination of Section 57 of the Local
                                        Government Code is indispensable, and we quote:
                                        "SEC. 57. Review of Barangay Ordinances by the
                                        Sangguniang Panlungsod or Sangguniang Bayan.- (a)
                                        Within ten (10) days gfter its enactment, the
                                        Sangguniang Barangay shall furnish copies of au
                                        barangay ordinances to the Sangguniang Panlungsod or

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        Sangguniang Bayan concerned for review as to whether
                                        the ordinance is consistent with Zaw and city or
                                        municipal ordinances.
                                        (b)
                                        If the Sangguniang Pan Zungsod or
                                        Sangguniang Bayan, as the case may bet fails to take
                                        action on baran a ordinances within thirt 30 da s
                                        from receipt therepf, the same shatt be deemed
                                        approved. (underlining ours)
                                        (c) If the Sangguniang Pan lungsod or
                                        Sangguniang Bayan, as the case may be, finds the
                                        barangay ordinances inconsistent with Zaw or city or
                                        municipal ordinances, the sanggunian concerned shatt,
                                        within thirty (30) days from receipt thereof, return the
                                        same with its comments and recommendations to the
                                        Sangguniang Barangay concerned for adjustment,
                                        amendment, or modification; in which case, the
                                        effectivity of_ the barangay ordinance is suspended until
                                        such time as the revision called or is e ected."
                                        (underlining ours)
                                        May we emphasize at the outset that "validity" is not the same with
                                        "effectivity". They are two (2) different things. Validity refers to the
                                        substantive requirement of an ordinance, whether the sanie is consistent
                                        with the Constitution and laws. Effectivity, on the other hand, is the time by
                                        which an ordinance is made effective and can already be implemented and
                                        given full force and effect. In this regard, it may be well to note that when
                                        the Sangguniang Panlungsod reviews a barangay ordinance pursuant to the
                                        aforequoted Section 57 of the Local Qovemment Code, the subject matter
                                        of the review dwells on the validity only of an ordinance, and not to its
                                        effectivity. Effectivity is govemed by Section 59 of the Local Government
                                        Code, such that an ordinance of a local government unit or that of a
                                        barangay in particular, becomes effective as of the date the framers of such
                                        ordinance would like it to be effective, subject to the provisions of Section
                                        59 (a) of the Local Qovemment Code, which provides:
                                        "SEC. 59.
                                        Effectivity of Ordinances or
                                        Resolutions.- (a) Unless otherwise stated in the
                                        ordinance or the resolution approving the locat
                                        development plan and public investment program, the
                                        same shaZZ take effect after ten (10) days from the date
                                        a copy thereof is posted in a bulletin board at the
                                        entrance of the provincial capitol or city, municipal, or
                                        barangay halt, as the case may be, and in at least two
                                        (2) other conspicuous places in the Zocat government
                                        unit concerned. "
                                        Accordingly, pending review by the Sangguniang Panlungsod, a
                                        barangay ordinance can already be implemented and given force and effect
                                        as of the date the enacting legislative body would want it to be effective in

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        accordance with the "Effectivity Clause" of the ordinance. This would
                                        precisely explain that under Section 57 (c) of the same Code, it is mandated
                                        that should the Sangguniang Panlungsod or the Sangguniang Bayan, as the
                                        case may be, find the ordinance inconsistent with law or city or municipal
                                        ordinance, the sanggunian concemed shall return the same with its
                                        comments and recommendations to the sanggunian concerned for
                                        adjustment, amendment or modification of the ordinance under review, and
                                        in such a case, the effectivity of the barangay ordinance is suspended until
                                        such time that the revision caned for is effected.
                                        With respect to your second query on what is the status of a barangay
                                        ordinance if the 30-day period prescribed under the Local Qovemment Code
                                        within which for the Sangguniang Panlungsod to act has lapsed without
                                        action made from the same sanggunian, please be informed that this
                                        Department has consistently opined that when a power is given, and that the
                                        power is to be exercised within a prescriptive period, then such prescriptive
                                        period is considered a limitation to such power. This is consistent with the
                                        principle that "where a statute prescribes a time within which a
                                        public officer is to perform official acts affecting the rights of
                                        others, it is directory as to the time, unless from the nature of the
                                        act, the designation of time must be considered a timitation on the
                                        power of the officer" (50 Am Jur, 23, p. 46, cited by Alcantara, Samson
                                        in his book Statutes, 1990 Ed.)
                                        Corollary thereto, this Department had consistently opined that in
                                        interpreting Section 57 (b) of the Local Government Code, to wit: "(b) (f
                                        the San unian Pantun sod or San unian Ba an as the case
                                        ma be ails to take action on baran a ordinances within thirt
                                        (30) days from receipt thereof, the same _ shalt be deemed
                                        approved", the phrase "take action" should be construed as either
                                        approval or disapproval of the ordinance and not just any other action of the
                                        reviewing sanggunian, such as referral to a committee.
                                        Our interpretation as to the mandatory character of the 30-day period
                                        to take action is impelled by public policy. Barangay ordinances should
                                        attain stability at a given point in time. Otherwise, it would render barangay
                                        ordinances unstable and may even result to the subservience of the lower
                                        sanggunian to the higher sanggunian considering that the latter can
                                        invalidate the ordinance on review at any time it pleases and may even
                                        arbitrarily or whimsically disapprove an ordinance which has already been
                                        implemented for quite a long time. Moreover, ordinances are presumed
                                        valid until the contrary is decreed by the reviewing authority or the courts.
                                        With respect to liability, may we note that when the Sangguniang
                                        Panlungsod reviews a Sangguniang Barangay Ordinance, three (3) options
                                        for that sanggunian are available, to wit: (1) expressly declare the ordinance
                                        to be inconsistent with law or city ordinances and provide for such proposed
                                        amendments, modifications or aqjustments, or (2) declare that the barangay
                                        ordinance is inconsistent with law and city ordinance, or (3) simply allow the

                                        ****** Result for Image/Page 4 ******
                                        30-day period to take action on the review of the barangay ordinance to
                                        lapse, in which case, the Sangguniang Panlungsods failure to act on the
                                        barangay ordinance within the said period can be, by legal presumption,
                                        deemed approved per Section 57 (b) of the Local Government Code.
                                        Accordingly, when the Sangguniang Panlungsod simply allowed the
                                        30-day period to lapse, then the legal conclusion would be, your ordinances
                                        are deemed approved and there will be no more need for you to wait for any
                                        action from the Sangguniang Panlungsod. Hence, since the law recognizes a
                                        situation where the Panlungsod can just simply let the 30<1ay
                                        period to lapse as anyway the law provides for its consequential legal effect,
                                        no liability will attach.
                                        We hope to have enlightened you accordingly.
                                        Legal:43/La
                                        cc: Director Leonilo B. Lanosa
                                        DILQ Region IV-A
                                        Calderon Bldg., EDSA
                                        Diliman, Quezon City
                                        Ve
                                        truly yours,
                                        ANGEL T. REYES
                                        Secretary
                                        DEPARTMENT THE KTERIOR
                                        ANO LOCAL GOVERNMENT
                                        REPLY"".
                                        SILG05-006359',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-055S2005',
                    'reference' => 'LO-055S2005', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II, EDSA
                                        cor. Mapagmahal St., Dilirnan, Quezon City
                                        OFFICE OF SECRETARY
                                        55
                                        25 November 2005
                                        ATTY. ROSARIO H. AMATONG-BUENDIA
                                        Executive Director
                                        Reference and Research Bureau
                                        House of Representatives
                                        Batasan Complex, Constitution Hills
                                        Diliman, Quezon City
                                        Dear Atty. Buendia:
                                        This refers to your letter, seeking this Departments opinion and
                                        interpretation of Section 12, Article X of the 1987 Constitution vis-å-vis Section
                                        452 (c), Chapter l, Title Three, Book Ill of the Local Government Code of 1991.
                                        According to you, both provisions deal on the participation or non-
                                        participation of voters of highly urbanized cities in the elections of provincial
                                        elective officials.
                                        Along that premise, you would now like to be enlightened on the following
                                        issues:
                                        1.
                                        "Is the prohibition on HUCs re participation of their voters in
                                        provincial election absolute? Please expound.
                                        Voters of one HUC have been found to enjoy their right to vote
                                        in provincial elections as provided by their City Charter.
                                        (Attachment A). This was further confirmed by the documents
                                        provided by the COMELEC which show that voters in this HUC
                                        did participate in the provincial election held last May 2004.
                                        (Attachment B).
                                        2. This city was converted to HUC on February 15, 1991.
                                        (Attachment C). Section 96 of Republic Act No. 5519, the
                                        Citys Charter, was amended by Republic Act No. 6641 on
                                        December 23, 1987 to allow the voters in the city to participate
                                        in the provincial election. (Attachment D).
                                        Why are the voters of this HUC allowed to vote in provincial
                                        elections?
                                        3. Can other HUCs amend their charter to allow their voters to
                                        participate in provincial elections? If not, what makes their
                                        situation different from the first cited HUC? (#2)
                                        5

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        4. May the voters of the HUC, which is the capital of a province,
                                        set to be divided, be allowed to participate in the plebiscite to be
                                        held for the purpose? If not, what recourse can they take being
                                        directly affected by the proposed division?"
                                        Before we dwell on our position, please allow us to discuss the nature of
                                        cities and how are they classified under the law.
                                        Section 451 of the Local Government Code classifies a city as either a
                                        component city or a highly urbanized city. Component cities are cities whose
                                        Charter allows (or contains no such prohibition) its voters to vote for elective
                                        positions in the province in which they are geographically located. The same
                                        section, on the other hand, provides that component cities whose Charters
                                        prohibit their voters from voting for elective provincial officials are called
                                        independent component cities.
                                        It is, therefore, worth noting that Section 451 of the Local Government
                                        Code classified cities into only two, namely: component and highly urbanized
                                        cities, and that component cities are further classified into component cities or
                                        independent component cities, depending on whether or not its Charter allows or
                                        does not allow its voters to vote for elective provincial positions.
                                        Section 452 of the same Code, on the other hand, provides for the
                                        verifiable indicators, such as the required income and population, under which
                                        component cities or independent component cities may apply and qualify for
                                        conversion into a highly urbanized city.
                                        Section 453 of the same Code mandates that it shall be the duty of the
                                        President to declare a city as highly urbanized city within thirty (30) days after it
                                        shall have met the minimum requirements prescribed in Section 452, upon proper
                                        application therefor, and ratification in a plebiscite by the qualified voters therein.
                                        A study of the old provisions of the Local Government Code, which is Batas
                                        Pambansa Blg. 337t would yield similar provisions, except that under the old Local
                                        Government Code, the duty to convert a city into a highly urbanized city was
                                        conferred to the Minister of Local Government and no plebiscite was required. It
                                        is clear from the foregoing that in conversion to a highly urbanized city, it is
                                        immaterial whether a city is component or independent component since either of
                                        them may apply for conversion for as long as they comply with the requirements
                                        set forth by law. At this point, may we restate Section 12, Article X of the 1987
                                        Constitution and Section 452 (c) of the Local Government Code, thus:
                                        "ART. X, SEC. 12.
                                        Cities that are highly
                                        urbanized, as determined by law, and component cities
                                        whose charters prohibit their voters from voting for
                                        provincial elective officials, shall be independent of the
                                        province. The voters of component cities within a
                                        province, whose charters contain no such prohibition,
                                        shall not be deprived of their right to vote for elective
                                        provincial officials." (1987 Constitution)
                                        "SEC. 452. Highly Urbanized Cities.- (c) Qualified

                                        ****** Result for Image/Page 3 ******
                                        3-
                                        voters of highly urbanized cities shall remain excluded
                                        from voting for elective provincial officials.
                                        Unless otherwise provided in the Constitution or
                                        this Code, qualified voters of independent component
                                        cities shall be governed by their respective charters, as
                                        amended, on the participation of voters in provincial
                                        elections.
                                        Qualified voters of cities who acquired the right to
                                        vote for elective provincial officials prior to the
                                        classification of said cities as highly urbanized after
                                        the ratification of the Constitution and before the
                                        effectivity of this Code, shaZZ continue to exercise such
                                        right." (Local Government Code)
                                        Hence, going now to your first query as to whether or not "the
                                        prohibition of highly urbanized cities re participation of their
                                        voters for provincial election is absolute", we answer qualifiedly. It is
                                        noted that a careful study of the old Local Government Code (Batas Pambansa
                                        Big. 337), the new Local Government Code (RA 7160), and even the provisions of
                                        the Constitutions adverted to above, yielded no express provision that prohibits
                                        qualified voters of highly urbanized cities to vote for provincial elective positions.
                                        What Section 12, Article X of the 1987 Constitution simply provided is that, highly
                                        urbanized cities are independent from the province. To our mind, this
                                        independence pertains only to the administrative relationship between the city
                                        and the province, referring in particular the exercise of administrative supervision
                                        of the province over its component cities and municipalities. Pertaining as it does
                                        to the exercise of the right of suffrage, it should be construed strictly and thus,
                                        should not be stretched further in a manner as to affect the right of its qualified
                                        voters to vote or not to vote in the election of provincial elective positions.
                                        Therefore, being independent, a highly urbanized city is not within the power of
                                        general supervision of the province. In the same vein, Section 452 of the Local
                                        Government Code did not also contain an express prohibition that voters of highly
                                        urbanized cities are prohibited to vote for provincial elective offiials.
                                        It simply
                                        provided that qualified voters of highly urbanized cities shall remain excluded
                                        from voting for provincial elective positions.
                                        With the foregoing discussion, we believe that in determining as to whether
                                        or not voters of highly urbanized cities are allowed to vote for provincial elective
                                        positions, the Charter of the component city or independent component city
                                        concerned is the governing law on the matter. It bears stressing that the Charter,
                                        which is the substantive law with regard to its creation as such, is not amended or
                                        repealed accordingly when said city is converted into a highly urbanized city. To
                                        our mind, it seems that the last paragraph of paragraph (c) of Section 452 of the
                                        Local Government Code would like to impress upon us that once a city is
                                        converted into a highly urbanized city after the effectivity of the Local
                                        Government Code, the voters of the newly converted highly urbanized city are
                                        already deprived to vote for provincial elective officials, regardless of the City
                                        Charter. However, we would like to take exception on this. The IS paragraph of
                                        Section 452 of the Code cannot be considered as an express positive prohibition
                                        for voters in highly urbanized city to vote for elective provincial officials. It is

                                        ****** Result for Image/Page 4 ******
                                        -4-
                                        even vague since there is no law or even provision in the Constitution that
                                        prohibits voters of highly urbanized cities to vote for elective provincial officials.
                                        Hence, there is no exact reference why the first paragraph would say "shall
                                        remain excluded". Right of suffrage insofar as the voters are concerned
                                        should be liberally construed. Hence, said phrase should not be construed as to
                                        deprive or limit the voters of highly urbanized city to exercise their right of
                                        suffrage. Hence, we are of the honest belief that notwithstanding the first
                                        paragraph of Section 452 (c) of the Code, it would still be the Charter that will
                                        It is noted that as stated above, conversion of a city into a highly
                                        prevail.
                                        urbanized city is done only through an executive fiat and, hence, cannot amend or
                                        repeal the substantive rights of the voters under the Charter, which is an Act of
                                        Congress. Accordingly, even if already converted into a highly urbanized city, if
                                        the voters of the city are given the right to vote for elective provincial officials
                                        under the Charter which created it, then they can continue to exercise the same
                                        notwithstanding the conversion.
                                        With regard to your second query, asking why the voters of a particular
                                        highly urbanized city were allowed to vote in provincial elections in the last May
                                        2004 elections, we could only surmise that your query may be answered in the
                                        light of the foregoing discussion. In the scenario you have given, it is noted that
                                        the Charter of the city you were referring tot although you did not mention the
                                        name of the city, was amended by a later law on 23 December 1987 which
                                        allowed the voters in the city to participate in the provincial elections. The same
                                        city was later on converted into a highly urbanized city in 15 February 1991.
                                        It bears stressing that the conversion of a city into a highly urbanized city
                                        will not affect the rights of the voters therein to vote for provincial officials.
                                        What is only affected is the administrative relationship between the province and
                                        the component city, such that if the component city is converted into a highly
                                        urbanized city, it is already independent from provincial supervision. This is
                                        precisely the reason why in the last paragraph of Section 452 of the Local
                                        Government Code, the law provides that notwithstanding the conversion of the
                                        city into a highly urbanized city, the voters therein shall continue to exercise their
                                        right to vote for provincial elective positions as the same was expressly granted
                                        prior to its conversion.
                                        With regard to your third query seeking clarification as to whether HUCs
                                        can amend their charters to allow their voters to participate in provincial
                                        If not, what makes their situation different from the aforecited HUC
                                        elections.
                                        Please be informed that we see no legal or
                                        you mentioned in your query.
                                        constitutional violation should highly urbanized cities amend their Charters to
                                        allow their voters to vote in the provincial elective positions. As earlier discussed,
                                        there is nothing in Section 12 of the Constitution as aforequoted that would give
                                        us an express provision that prohibited voters of highly urbanized cities to vote for
                                        elective provincial positions. What it simply provided is the severance of the
                                        administrative relationship between the component city and the provincial
                                        government after its conversion into a highly urbanized city. There being no
                                        constitutional prohibition, then we see no violation of the Constitution if a law is
                                        later on passed amending a Charter of a highly urbanized city to the effect of
                                        It will not even
                                        allowing its voters to participate in the provincial elections.
                                        violate Section 452 (c) of the Code since the word "remain" found in the first
                                        sentence of paragraph (c) of Section 452 of the Code, to our mind, is more of a

                                        ****** Result for Image/Page 5 ******
                                        -5-
                                        transition rather than a prohibition.
                                        With regard to your last query, may we quote Section 10, Article X of the
                                        1987 Constitution and Section 10 of the Local Government Code, thus:
                                        "ART. X, SEC. 10. No province, city, municipality,
                                        or barangay may be created, divided, merged,
                                        abolished, or its boundary substantially altered, except
                                        in accordance with the criteria established in the Local
                                        government code and subject to approval by a majority
                                        of the votes cast in a plebiscite in the political units
                                        directly affected." (1987 Constitution)
                                        "SEC. 10. Plebiscite Requirement.- No creation,
                                        division, merger, abolition, or substantial alteration of
                                        boundaries of local government units shatt take effect
                                        unless approved by a majority of the votes cast in a
                                        plebiscite catted for the purpose in the political unit or
                                        units directly affected. Said plebiscite shall be
                                        conducted by the Commission on Elections (Comelec)
                                        within one hundred twenty (120) days from the date of
                                        effectivity of the Zaw or ordinance affecting such
                                        action, unless said law or ordinance fixes another
                                        date." (RA 7160)
                                        Verily, the aforequoted provisions consistently used the phrase "political
                                        units directly affected" hence the need to scrutinize what being "directly
                                        affected" refers to.
                                        Being "directly affected" may either refer to economic, geographic or
                                        political. Insofar as being geographically affected is concerned, it is beyond doubt
                                        that any kind of LGU within a province is necessarily geographically affected if
                                        the boundaries of the province where they belong is divided and altered. In
                                        connection with the economic aspect, indubitably, highly urbanized cities are
                                        unaffected, since it is rather clear that highly urbanized cities do not receive any
                                        share of the wealth or income from the province.
                                        With regard to the political aspect, may we first lay down certain points,
                                        viz;
                                        ELECTION, strictly speaking, is the means by which the people choose
                                        their officials for a definite and fixed period and to whom they entrust, for the
                                        time being, as their representatives, the exercise of powers of government
                                        (Garchitorena vs. Crescini, 39 Phil. 258). It involves the choice or selection of
                                        candidates to public office by popular vote (Taule vs. Santos, 200 SCRA 512).
                                        PLEBISCITE, on the other hand, refers to a vote of the people expressing
                                        their choice for or against a proposed law or enactment, submitted to them, and
                                        which, if adopted, will work a change in the Constitution, or which is beyond the
                                        powers of the regular legislative body (Blacks Law Dictionary, 6th Ed.). In the
                                        Philippines, the plebiscite is applied to an election at which any proposed
                                        amendment to, or revision of, the Constitution is submitted to the people for

                                        ****** Result for Image/Page 6 ******
                                        -6-
                                        ratification. Under our constitution, it is also required to secure the approval of
                                        the people directly affected, before certain proposed changes affecting local
                                        government units may be implemented (De Leon and De Leon, Jr-, The Law On
                                        Public Officers and Election Law, 3rd Ed., p. 412).
                                        Accordingly, from the foregoing definition, it is clear that the power of the
                                        people to vote in a plebiscite is an exercise of a political right, which is available
                                        to everybody regardless of whether their residence is a municipality, independent
                                        component city, component city or highly urbanized.
                                        Hence, if the voters of a highly urbanized city are allowed by their Charters
                                        to vote for provincial officials, which as we have said earlier is feasible, then the
                                        same voters should likewise be allowed to vote during the plebiscite, lest their
                                        political rights be trampled upon- Being politically affected, therefore, is enough
                                        ground to allow the voters therein to vote during the plebiscite.
                                        We hope we have enlightened you on the matter.
                                        Legal:43/La
                                        Very truly yours,
                                        ANG OT. REYES
                                        Secretary
                                        DEPARTMENT OF THE INTERIOR
                                        ANO LOCAL GOVERNMENT
                                        IN REPLYING, PLS CITE:
                                        SILG05-009940',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-006S2009',
                    'reference' => 'LO-006S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        mt.c OPIN(ONNO 6 s.
                                        22 January 2009
                                        MR. JORGE L. DURON, ET AL
                                        Interim President
                                        Barangay Captains Alumni Association, Inc.
                                        Iloilo City Chapter
                                        Dear Mr. Duron, et al:
                                        This has reference to your earlier letter asking for our legal opinion
                                        on the following aforequoted queries, thus:
                                        "1) Is an Ordinance enacted by the City Council of Manila
                                        copy of "hich is hereto attached under Ordinance No. 8702 dated
                                        January 19, 2004 entitled "An Ordinance Conferring Distinguished
                                        Public Service Award to Barangay Omcials "ho have been elected
                                        for three (3) consecutive terms after the passage of RA 7160,
                                        otherwise known as the Local Government Code of 1991" legal or
                                        illegal?
                                        g) Is there a law prohibiting the Local Government Unit
                                        through its Sanggunian to enact an Ordinance Conferring a
                                        Distinguished Public Service A ward with monetary benefits within
                                        their Area of Jurisdiction invoking the essence of Local A utonomyP
                                        Since your queries are interrelated, we shall answer them jointly.
                                        At the outset, please be informed that this Department is bereft of
                                        any authority to declare invalid or illegal any legislative measure passed by
                                        local sanggunians such as Ordinance No. 8702, dated 19 January 2004
                                        enacted by the Sangguniang Panlungsod of the City of Manila. Only courts
                                        can make such declaration upon proper filing of an action for Declaratory
                                        Relief in accordance with Rule 63 of the Revised Rules of Court.
                                        Be that as it may, for purposes of academic discussion coupled with
                                        our objective to guide you on the proper course of action to take under the
                                        circumstances, we find the opinion of that Citys Legal Office, dated 20
                                        October 2008, that Iloilo City, through the Sangguniang Panlungsod, may
                                        enact an ordinance conferring a distinguished Public Service Award with
                                        monetary benefits to barangay officials thereat who have been elected and
                                        served for three (3) consecutive terms of office after the passage of the
                                        Local Government Code of 1991, tenable.
                                        Per your letter and its attachments, it is the contention of the
                                        Regional Director of the Department of Budget and Management (DBM),

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        dated 21 October 2008, that the grant of cash rewards to barangay officials
                                        is bereft of legal basis, as there is no specific provision of law granting
                                        benefits to barangay officials for completing three consecutive terms. The
                                        Regional Director articulated that Section 393 of the Local Government
                                        Code of 1991 may not serve as the legal basis thereof considering that it
                                        only delves with the entitlement of incumbent barangay officials of
                                        emoluments as may be authorized by law or ordinance. With all due
                                        respect to the opinion of the Regional Director of DBM, Section 393 of the
                                        Code will indeed not truly serve as legal basis for the conferment of the
                                        award and the grant of monetary benefits since the barangay officials
                                        involved in the case at hand are no longer incumbents but those who have
                                        served/completed three consecutive terms in office. Instead, we find the
                                        power of the Sangguniang Panlungsod under Section 458 (a) of the Local
                                        Government Code of 1991 to enact ordinances and appropriate funds for
                                        the general welfare of the city and its inhabitants pursuant to Section 16 of
                                        this Code as a sufficient basis for the conferment of the award and grant of
                                        the aforesaid monetary benefits. Let it be noted that general welfare or
                                        public purpose is not unconstitutional merely because it incidentally
                                        benefits a limited number of persons (Binay vs. Domingo G.R. No. 92389,
                                        September 11, 1991; COA Decision No. 94-222 August 11, 1994), such as the
                                        herein barangay officials who have been elected for three (3) consecutive
                                        terms.
                                        May we note however that while the Sangguniang Panlungsod may
                                        enact an ordinance conferring a distinguished Public Service Award with
                                        monetary benefits to the concerned barangay officials, the grant of said
                                        monetary benefits to the concerned barangay officials shall still be subject
                                        to the availability of funds of the City Treasury and in pursuant to an
                                        Appropriation Ordinance to be enacted by the Sangguniang Panlungsod.
                                        This is consistent with Section 305 (a) of the Local Government Code of
                                        1991 , which provides and we quote:
                                        "SECTION 305. Fundamental Principles — The
                                        financial affairs, transactions and operations of local
                                        government units shall be governed by the following
                                        principles:
                                        (a) No money shall be paid out of the local
                                        treasury except in pursuance of an appropriations
                                        ordinance or law;
                                        We hope that we have addressed your concern accordingly.
                                        Very truly yours,
                                        AUSTERE A. PANADE
                                        Undersecretar
                                        Cc: Regional Director Evelyn A. Trompeta
                                        DILG-Region VI
                                        6 Parola St., Iloilo City
                                        Legal/ 17',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-012S2009',
                    'reference' => 'LO-012S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        200Æ...=
                                        19 February 2009
                                        ATTN. ANA UZA A. PERALTA
                                        MR. ARSENIO A. MAURICIO, JR.
                                        Sangguniang Bayan Members
                                        San Marcelino, Zambales
                                        MR. DANIEL A. FABUNAN
                                        Punong Barangay
                                        Barangay Lucero
                                        San Marcelino, Zambales
                                        Dear Atty. Peralta and Messrs. Mauricio and Fabunan:
                                        This has reference to your earlier separate letters, which we herein
                                        consolidated, considering that your queries all boil down to one issue, that
                                        is, on the validity of the Resolution passed by the Sangguniang Bayan of
                                        San Marcelino, Zambales imposing unto PB Fabunan a 60-day preventive
                                        suspension.
                                        Per your letters, an administrative complaint for conduct
                                        unbecoming a barangay official was filed against PB Fabunan before the
                                        Sangguniang Bayan. Thereafter, according to the letter of Atty. Peralta, the
                                        issue as to whether a preventive suspension should be imposed against
                                        PB Fabunan was submitted for votation by the Sangguniang Bayan. Where
                                        eleven (11) members of the Sangguniang Bayan were present in the
                                        session, the result of the votation in the Sangguniang Bayan was as
                                        follows: Yes-4; No-3; Inhibited-2; and Abstained-I.
                                        On the other hand, upon reading the letter of Sangguniang Bayan
                                        Member Mauricio, we noticed that the issue that was submitted for votation
                                        by the Sangguniang Bayan was rather the duration of the preventive
                                        suspension to be imposed against PB Fabunan. The result of the votation
                                        in the Sangguniang Bayan was as follows: for 60 days-4; for 30 days-3;
                                        abstained-I; and inhibited-2.
                                        Be that as it may, it is however undisputed that the Sangguniang
                                        Bayan has approved Resolution No. 2008-048 recommending a sixty (60)-
                                        day preventive suspension against PB Fabunan. Accordingly, the
                                        Municipal Mayor thereat imposed the preventive suspension against PB
                                        Fabunan. Subsequently, however, the validity of said imposition as well as
                                        the Resolution of the Sangguniang Bayan recommending a sixty (60)-day
                                        preventive suspension were questioned by PB Fabunan. In fact, this utter

                                        ****** Result for Image/Page 2 ******
                                        dissent and/or non-recognition of PB Fabunan was succinctly quoted in the
                                        letter of Sangguniang Bayan Member Mauricio, thus: "With due respect, I
                                        write to let you know, that I am not recognizing the legitimacy of your order
                                        placing me under Preventive suspension because the same is anchored in an
                                        illegitimate resolution passed by the Sangguniang Bayan of San Marcelino
                                        Resolution No. 2008-048 which legislative measure has no force and effect under
                                        the law, since the same was not approved by the majority of the members of said
                                        Sanggunian." By reason thereof, according to the letter of Atty. Peralta, the
                                        Mayor filed before the Sangguniang Bayan an administrative case for
                                        Grave Misconduct, Insubordination, etc. against PB Fabunan. During a
                                        series of follow-ups made, it was represented that PB Fabunan has also
                                        filed a case before the regular court assailing the validity of Sangguniang
                                        Bayan Resolution No. 2008-048 recommending a sixty (60)-day preventive
                                        suspension against him. Hence, your query.
                                        In reply thereto, please be informed that this Department is bereft of
                                        any authority to declare invalid or illegal any legislative measure passed by
                                        local sanggunians such as Sangguniang Bayan Resolution No. 2008-048
                                        recommending a sixty (60)-day preventive suspension against PB Fabunan
                                        enacted by the Sangguniang Bayan, that Municipality. Only courts can
                                        make such declaration upon filing of a proper action before the proper
                                        forum. Since, as represented, there is already a case filed before the
                                        regular court questioning the validity of the subject Sangguniang Bayan
                                        Resolution, the issue is already within the domain of the judicial branch of
                                        the government. This Department, which is under the executive branch, is
                                        no longer at good liberty to render an opinion on the issue as we might be
                                        accused of violating the sub-judice rule, which is considered as
                                        contumacious act against the court.
                                        We hope that we have addressed your concern accordingly.
                                        Very truly yours,
                                        AUSTERE A. PANADERO
                                        Undersecretary Y/
                                        cc:
                                        Director Renato L. Brion
                                        DILG-Region Ill
                                        San Fernando City, Pampanga
                                        Legal/ 17',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-015S2009',
                    'reference' => 'LO-015S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg., cor EDSA
                                        Mapagmahal Street, Diliman, Quezon City
                                        OFFICE OF UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        UjLG OPtN(GN C.
                                        March 03, 2009
                                        ATTY. JOHN m BAL.ASYÄ
                                        Mayor, Municipality of Kayapa
                                        Nueva Vizcaya
                                        Dear Atty. Balasya:
                                        This has reference to your request for this Departments legal opinion anent
                                        your intent to purchase a second hand four wheel drive (4x4) six (6) cylinder vehicle
                                        vis-å-vis Administrative Order No. 233 entitled "Reiterating the Prohibition on the
                                        Acquisition and Use of Luxury Vehicles and Directing Revisions of Guidelines on
                                        Government Motor Vehicles Acquisition", dated August l, 2008 issued by Her
                                        Excellency President Gloria Macapagal Arroyo.
                                        As stated in your letter, your intention to purchase a (4x4) 6 cylinder vehicle is
                                        impelled by the need to traverse the mountainous terrain of your municipality.
                                        In reply thereto, please be informed that the primordial goal which
                                        Administrative Order 233 intends to achieve is the conservation of this countrys fuel
                                        consumption so as to minimize our dependence on imported fuels. Precisely, the
                                        President issued the prohibition on the purchase of luxury vehicles as the latter,
                                        undoubtedly are known gas-guzzlers.
                                        Be that as it may, the prohibition made by Administrative Order 233 is not one
                                        of an absolute nature, because section 9.0 thereof still allows the purchase of luxury
                                        vehicles by Local Government Units provided that prior approval from the Office of
                                        the President is sought.
                                        Thus, we are of the opinion that your municipality may purchase the intended
                                        vehicle stated in your letter, but only after having secured the imprimatur of the
                                        Office of the President.
                                        We hope we have enlightened you on the matter.
                                        Ve
                                        ly yours,
                                        AUSTERE A. PANADE O
                                        Undersecret
                                        Legal:LD/87 /corz',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-019S2009',
                    'reference' => 'LO-019S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        OPtN(ON NO.
                                        28 April 2009
                                        ENGR. ERNESTO L. NATIVIDAD
                                        City Mayor
                                        City of Gapan, Nueva Ecija
                                        Dear Mayor Natividad:
                                        This has reference to your earlier letter asking this Departments
                                        legal opinion as to the legal status of City Ordinance No. 02, series of 2008,
                                        entitled, "An Ordinance Regulating the Establishment, Classification,
                                        Administration and Operation of Government Owned/Operated Public Markets in
                                        the Local Government of Gapan otherwise known as the Market Code of Gapan".
                                        Per your letter, you stated that you approved City Ordinance No. 02,
                                        series of 2008 or the Market Code of Gapan on 01 September 2008. The
                                        same was thereafter published in a newspaper of local circulation. On 16
                                        September 2008, the Secretary of the Sangguniang Panlungsod forwarded
                                        to the Sangguniang Panlalawigan a copy of the aforesaid Ordinance and,
                                        according to you, the Sangguniang Panlalawigan did not signify any
                                        objection or comment thereto until on the first week of November 2008 or
                                        almost two (2) months from receipt thereof. You averred that members of
                                        the Sangguniang Panlungsod were then summoned to appear before the
                                        Sangguniang Panlalawigan regarding the alleged complaint of several
                                        vendors in Gapan Public Market as to the propriety of the subject
                                        Ordinance. You stated finally that Vice-Mayor Christian U. Tinio, at his own
                                        instance, withdrew the subject Ordinance from the Sangguniang
                                        Panlalawigan and started conducting proceedings to repeal and/or amend
                                        the same.
                                        In view of the foregoing, you are now seeking for enlightenment on
                                        the following:
                                        1) Whether or not Ordinance No. 02, series of 2008 or
                                        the Gapan Public Market Code has become effective SO days after it

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        was received by the Sanggunang Panlalawigan on 16 September
                                        2008; and
                                        g) Whether or not said Ordinance can now be
                                        implemented by the City Mayor despite subsequent actions taken by
                                        the Sangguniang Panlungsod, particularly that of withdrawing said
                                        Ordinance from the Office of the Sangguniang Panlalawigan and
                                        conducting proceedings to amend and/or repeal some provision
                                        thereof.
                                        We deem it proper to answer your queries jointly since they pertain
                                        to one subject matter.
                                        In reply thereto, we find it imperative to make a distinction on the
                                        terms "effectivity" and "validity" as mentioned and used under the
                                        Local Government Code of 1991 (RA 7160). Please be informed that these
                                        terms are not the same. They are two (2) different things.
                                        Effectivity is the time by which an ordinance is made effective and
                                        can already be implemented and given full force and effect. Effectivity is
                                        governed by Section 59 (a) of the Local Government Code of 1991, thus:
                                        "SECTION 59.
                                        Ordinances
                                        Effectivi ty of
                                        or
                                        Resolutions. -(a) Unless otherwise stated in the ordinance or
                                        the resolution approving the local development plan and
                                        public investment program, the same shall take effect after
                                        ten (10) days from the date a copy thereof is posted in a
                                        bulletin board at the entrance of the provincial capitol or city,
                                        municipal, or barangay hall, as the case may be, and in at
                                        least two (2) other conspicuous places in the local govemment
                                        unit concerned."
                                        Based on Section 59(a) of the Local Government Code, an ordinance
                                        of a local government unit or that of a Sangguniang Panlungsod in
                                        particular, becomes effective as of the date the framers of such ordinance
                                        would like it to be effective and in the absence of such effectivity clause,
                                        the same shall take effect after ten (10) days from the date a copy thereof is
                                        posted in a bulletin board at the entrance of the city hall and in at least two
                                        (2) other conspicuous places in the local government unit concerned. With
                                        respect to ordinances with penal sanctions, publication of the same in a
                                        newspaper of general circulation within the province where the local
                                        legislative body belongs is further required.

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        Ordinance No. 02, series of 2008 or the Market Code of Gapan has an
                                        "Effectivity Clause" under Section 79 thereof which provides that "(T)his
                                        Ordinance shall take effect upon its approval, fifteen (15) days after its
                                        publication in a newspaper of local circulation." Let it be noted, however,
                                        that it is not clear therein on whose approval is being referred to.
                                        Nonetheless, in the absence of any specific reference, it can be safely
                                        presumed that the "approval" referred to under Section 79 of City Ordinance
                                        No. 02, series of 2008 or the Market Code of Gapan is the approval by the
                                        City Mayor of the enacted ordinance pursuant to Section 54 of the Local
                                        Government Code.
                                        Accordingly, upon your approval of City Ordinance No. 02, series of
                                        2008 or the Market Code of Gapan and after compliance with the
                                        publication requirement, said City Ordinance shall, as a matter of course,
                                        be already given legal effect and implemented even if the same is still
                                        pending review by the Sangguniang Panlalawigan. Thus, the withdrawal of
                                        City Ordinance No. 02, series of 2008 or the Market Code of Gapan made by
                                        Vice-Mayor Christian U. Tinio from the Sangguniang Panlalawigan will not,
                                        in any way, affect the effectivity of said Ordinance. Such withdrawal can be
                                        considered only as a mere mechanical act of withdrawing a copy of City
                                        Ordinance No. 02, series of 2008 and did not operate to suspend the
                                        effectivity of such legislative measure.
                                        Validity, on the other hand, refers to the substantive requirement of
                                        an ordinance, whether the same is consistent with the Constitution and
                                        laws. When the Sangguniang Panlalawigan reviews City Ordinance No. 02,
                                        series of 2008 or the Market Code of Gapan pursuant to Section 56 of the
                                        Local Government of 1991 , which we quote hereunder for easy reference:
                                        "SECTION 56. Review of Component City and
                                        Municipal Ordinances or Resolutions by the Sangguniang
                                        — (a) Within three (3) days after approval, the
                                        Panlalawigan.
                                        secretary to the sanggunian panlungsod or sangguniang bayan
                                        shall forward to the sangguniang panlalawigan for review,
                                        copies of approved ordinances and the resolutions approving
                                        the local development plans and public investment programs
                                        formulated by the local development councils.
                                        (b) Within thirty (30) days after the receipt of copies of
                                        such ordinances and resolutions,
                                        the sangguniang
                                        panlalawigan shall the documents or transmit them
                                        to the provincial attorney, or if there be none, to the
                                        provincial prosecutor for prompt examination. The provincial
                                        attorney or provincial prosecutor shall, within a period of ten

                                        ****** Result for Image/Page 4 ******
                                        -4-
                                        ( 10) days from receipt of the documents, inform the
                                        sangguniang panlalawigan in writing of his comments or
                                        recommendations, which may be considered by the
                                        sangguniang panlalawigan in making its decision.
                                        (c) If the sangguniang panlalawigan finds that such an
                                        ordinance or resolution is beyond the power conferred upon
                                        the sangguniang panlungsod or sangguniang bayan concerned,
                                        it shall declare such ordinance or resolution invalid in whole
                                        or in part. The sangguniang panlalawigan shall enter its action
                                        in the minutes and shall advise the corresponding city or
                                        municipal authorities of the action it has taken.
                                        (d) If no action has been taken by the sangzuniang
                                        panlalawigan within thirty (30) days after submission of such
                                        an ordinance or resolution. the same shall be presumed
                                        consistent with law and therefore valid." (Emphasis Supplied)
                                        the subject matter of the review dwells on the validity only of an ordinance,
                                        and not to its effectivity. Please be reminded that, as discussed above,
                                        pending review by the Sangguniang Panlalawigan, the Ordinance under
                                        review is already effective and can be given full force and effect upon the
                                        arrival of the time provided for in the effectivity clause of the ordinance.
                                        Along this line, may we stress that per the abovequoted Section 56
                                        of the Local Government Code of 1991, the Sangguniang Panlalawigan is
                                        required to take action on the ordinance on review within thirty (30) days
                                        after its submission. This Department had consistently opined that the
                                        phrase "take action" should be construed as either approval or disapproval
                                        of the ordinance and not just any other action of the reviewing sanggunian,
                                        such as referral to a committee. After the lapse of such period, and no
                                        official and/or formal document, such as a resolution which shall contain
                                        the findings of the Sangguniang Panlalawigan on review of the
                                        Sangguniang Panlungsod Ordinance, was issued by the Sangguniang
                                        Panlalawigan, it can be validly stated that the Sangguniang Panlalawigan
                                        failed to act within thirty (30) days and the ordinance or resolution under
                                        review can be presumed consistent with law and therefore valid.
                                        Please be informed that this Department has consistently opined that
                                        when a power is given, and that the power is to be exercised within a
                                        prescriptive period, then such prescriptive period is considered a limitation
                                        to such power. This is consistent with the principle that "where a statute
                                        prescribed a time within which a public officer is to perform official acts
                                        affecting the rights of others, it is directory as to the time, unless from
                                        the nature of the act, the designation of time must be considered a

                                        ****** Result for Image/Page 5 ******
                                        -5-
                                        limitation on the power of the officer" (50 Am Jur, 93, p. 46, cited by
                                        Alcantara, Samson in his book Statutes, 1990 Ed.)
                                        Our interpretation as to the mandatory character of the 30-day period
                                        to take action is also impelled by public policy. Sangguniang Panlungsod
                                        Ordinances should attain stability at a given point in time. Otherwise, it
                                        would render Sangguniang Panlungsod Ordinances unstable and may even
                                        result to the subservience of the lower sanggunian to the higher
                                        sanggunian considering that the latter can invalidate the ordinance on
                                        review at any time it pleases and may even arbitrarily or whimsically
                                        disapprove an ordinance which has already been implemented for quite a
                                        long time. Moreover, ordinances are presumed valid until the contrary is
                                        decreed by the reviewing authority or the courts.
                                        Finally, may we respectfully point out that laws, including the subject
                                        City Ordinance No. 02, series of 2008, are amended or repealed only by the
                                        enactment of subsequent ones. They are not repealed, nor their violation
                                        nor nonobservance excused by disuse or customs and practice to the
                                        contrary. In the case of the City of Manila ys. Reyes C92 Phil 986 (1966)], the
                                        Supreme Court held that the change in condition and circumstances after
                                        the passage of a law, which necessitated the enactment of a statute to
                                        overcome the difficulties brought about by such change does not operate
                                        to repeal the prior law, nor make the latter statute so inconsistent with the
                                        prior act as to repeal it.
                                        We hope that we have addressed your concern accordingly.
                                        Very truly yours,
                                        AUSTERE A. PANADER
                                        Undersecreta
                                        Legal:20/17',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-021S2009',
                    'reference' => 'LO-021S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY
                                        May 8, 2009
                                        CEZAR H. TAWAGON
                                        Barangay Busak, Libmanan
                                        Camarines Sur
                                        4407
                                        Dear Mr. Tawagon:
                                        21
                                        This refers to your letter seeking reconsideration and reversal of our Opinion No.
                                        92, Series of 2008, which was a response to your previous letter-query.
                                        To recall, we stated in the aforesaid opinion that the sangguniang bayan may
                                        establish a waterworks system only in accordance with PD 198 but has no power to
                                        create a corporate entity that will operate the waterworks system. In support thereof, we
                                        cited the ruling ot our Supreme Court in Feliciano vs- Commission on Audit [G.R. No.
                                        147402, 14 January 20041, which, in turn, cited among others Section 447 (5) (vii) of the
                                        Local Government Code of 1991. Obviously not satisfied with the adverse opinion
                                        insofar as you are concerned, and apparently under the impression that our opinions are
                                        binding to all courts, you now seek a reversal of the subject opinion invoking the doctrine
                                        that ours is a democratic and republican country.
                                        At the outset, please be informed that our opinions are not binding to the courts
                                        of law. Instead, it is the other way around. Being pan of the executive branch of the
                                        government, we are primarily tasked to implement laws only while it is the judicial
                                        branch that is primarily tasked to interpret them. This means that while we may
                                        render opinion regarding a certain law, our opinion thereon is never binding to any
                                        court of law. At most, our opinion only has a persuasive effect. Thus, if a court of law,
                                        especially our Supreme Court, has already interpreted a particular law through a
                                        decision it •rendered in a case, we are bound thereby and obliged to observe them in our
                                        subsequent actions involving substantially similar issues and/or facts-
                                        With the foregoing, we regret to inform you that we stick to our previous opinion
                                        as aforementioned because we find no cogent reason to deviate therefrom. As has
                                        been said, our Opinion No. 92, Series of 2008 was mainly based on the decision of our
                                        Supreme Court in Feliciano vs. Commission on Audit. Significantly, said decision
                                        resolved, among others, an issue substantially similar to what you have confronted us.
                                        Hope we have enlightened you on the matter.
                                        Very truly yours,
                                        AUSTERE A. PANADE O
                                        Undersecreta
                                        Is/28/md',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-027S2009',
                    'reference' => 'LO-027S2009', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        27
                                        27 May 2009
                                        VICE-MAYOR JANET D. ZARAGOZA
                                        Tayug, Pangasinan
                                        Dear Vice„Mayor Zaragoza:
                                        9
                                        This has reference to your earlier eight (8) letters seeking our legal opinion
                                        on various queries, which we consolidated and summarized as follows:
                                        1) Under Article 84 (a)(3) of the Rules and Regulations
                                        Implementing the Local Government Code of 1991 (RA 7160),
                                        leaves of absence of the members of the sanggunian shall be
                                        approved by the municipal vice-mayor.
                                        (b)
                                        (c)
                                        (d)
                                        Whether or not the aforesaid provision has already been
                                        modified or amended;
                                        What are the requirements that a Sangguniang Bayan
                                        Member must comply in the event that he decides to take
                                        leave of absence to travel abroad for personal reason;
                                        Is there a difference in the appreciation of temporary
                                        vacancy due to local travel of an elective official for
                                        personal reason and that for official business;
                                        Is there a legal basis in the interpretation made by one
                                        of your municipal officials that if an elective official
                                        leaves his territorial jurisdiction for three (3) days for
                                        personal reasons, the filing of an application for leave of
                                        absence is required. On the other hand, if said elective
                                        official leaves his territorial jurisdiction also for three (3)

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        days but this time for official business, the filing of an
                                        application for leave is no longer required.
                                        2) The Sangguniang Bayan (SB) of Tayug purchased one
                                        (1) unit of second hand van and one (1) unit of brand new
                                        motorcycle. Said SB enacted an ordinance creating the
                                        position of Administrative Aide III/ Driver I to officially drive
                                        the aforesaid vehicles. Unfortunately, the Mayor vetoed such
                                        ordinance. As represented, the SB cannot muster the required
                                        two-thirds (2/3) vote in order to override the Mayors veto.
                                        (a) Who should drive the aforesaid vehicles when the
                                        same will be used officially;
                                        (b) Can the SB lend the aforesaid vehicles to their
                                        constituents for the purpose of, for example, transporting their
                                        ailing relatives to the hospital, etc.;
                                        (c) Can the SB lend the vehicle to other government
                                        employees for the purpose of, for example, delivering
                                        communications or for their service;
                                        (d) Is the SB allowed to "borrow" the official driver of
                                        the Municipal ambulance considering that it has a separate
                                        plantilla of positions from the Office of the Mayor;
                                        (3) The SB enacted an ordinance abolishing the position
                                        of Midwife III. However, the Mayor vetoed the same on a lone
                                        ground that he has already appointed a person to that
                                        An inquiry was made to the Civil Service
                                        position.
                                        Commission (CSC) on the validity of such appointment made
                                        by the mayor. The CSC opined that there was a procedural
                                        lapse on the preparation of the appointment made by the
                                        Mayor, as the SB has not yet enacted a resolution determining
                                        the members of the Personnel Selection Board (PSB) pursuant
                                        to Section 80 of the Local Government Code of 1991.
                                        (a)
                                        (b)
                                        Can the Mayor exercise his veto power on any
                                        ordinance passed by the SB without any valid ground?;
                                        What is the effect of the CSCs letter-reply on the veto
                                        made by the Municipal Mayor on the aforesaid

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        ordinance? If in the negative, what remedy can the
                                        Vice-Mayor avail?
                                        (4) In the Municipality of Tayugs Annual Budget for
                                        Fiscal Year 2008, can the item of Calamity Fund therein be
                                        legally changed to Anti-Insurgency/Contingency Fund? If in
                                        the positive, will the declaration of the Sangguniang Bayan
                                        still a prerequisite in order to make use of the funds under
                                        anti-insurgency/contingency expenses;
                                        (5) In relation to Section 344 and Section 345 of the
                                        Local Government of 1991 (RA 7160) pertaining to
                                        certification and approval of vouchers and to officials
                                        authorized to draw checks in settlement of obligations,
                                        respectively, who are given the authority to assume the duties
                                        in case of absence of the approving officials or those officials
                                        authorized to draw checks in settlement of obligations? What
                                        are the duties that can be performed by their immediate
                                        assistants and are there any limitations thereof?
                                        (6) The Sangguniang Bayan of Tayug conducted a special
                                        session wherein nine (9) members including the Vice-Mayor,
                                        Budget Officer and MPDC officer were present. In said session,
                                        the Annual Appropriations Ordinance was approved on its
                                        second reading. Some SB members moved to suspend the
                                        rules to expedite the approval of the ordinance on its second
                                        and third reading. Said motion lost. At around 10 0clock on
                                        the following day, some members of the SB, constituting a
                                        quorum and believing that what had transpired the other day
                                        was a mere caucus since no written notice was given,
                                        conducted another special session where they approved, on its
                                        second and third reading, the Annual Appropriations
                                        Ordinance.
                                        (a) Will the appearance and participation of the SB
                                        members in the first special session despite the alleged lack of
                                        notice, constitute a waiver thereof?
                                        (b) VVhen the local chief executive certifies as urgent the
                                        Annual Appropriations Ordinance, can the SB suspend the rules
                                        and give way for the second and third readings in one single
                                        session?

                                        ****** Result for Image/Page 4 ******
                                        (c) If in both special sessions the requirement of
                                        written notice was complied with, which of the two special
                                        sessions must be acknowledged?
                                        (d) Whether the SB members, on the regular session,
                                        may validly insert some items that they forgot when they
                                        approved the Annual Appropriations Ordinance?
                                        (7) What happens if after ninety (90) days or more the
                                        Sangguniang Bayan still has not passed the Ordinance
                                        authorizing the Annual Appropriations? There being no
                                        approved budget yet, an increase in the salary of au
                                        government employees was approved effective July 2007, as
                                        such, what will be the salary given from January to June
                                        In reply to your first set of queries, may we invite your attention to Se ion
                                        47(a)(2) of the Code and Article 84 (a)(3) of its Implementing Rules and
                                        Regulations, which we quoted as follows:
                                        "SECTION 47. Approval of Leaves of Absence.—(a)
                                        Leaves of absence of local elective officials shall be approved
                                        as follows:
                                        (2) Leaves of absence of a vice-governor or a city or
                                        municipal vice-mayor shall be approved by the local chief
                                        executive concerned: Provided That the leaves of absence of
                                        the members of the sanggunian and its employees shall be
                                        approved by the vice-governor or city or municipal vice-mayor
                                        concerned;"
                                        ARTICLE 84. Leaves of Absence. (a) Leaves of absence
                                        of elective local officials shall be approved as follows:
                                        (3) Leaves of absence of the members of the
                                        sanggunian and appointive employees therein shall be
                                        approved by the vice-governor or city or municioal vice-mayor
                                        concerned;"
                                        xxx xxx
                                        (Emphasis Supplied)

                                        ****** Result for Image/Page 5 ******
                                        -5-
                                        Please be informed that the aforequoted provisions are still the governing
                                        rule pertaining to the filing of leave of absences of the members of the
                                        sanggunian, except the Barangays.
                                        May we inform you further that if the filing of leave of absences is due to
                                        travel abroad for personal reason, this Department has previously issued
                                        Memorandum Circular No. 2001-52 re Rules and Regulations Governing the
                                        Foreign Travel of Local Government Officials and Employees (08 May 2001);
                                        Memorandum Circular No. 2006-22 re Amending Memorandum Circular No.
                                        2001-52 dated may 8, 2001, entitled, Rules and Regulations Governing the Foreign
                                        (06 May 2006); and
                                        Travel of Local Government Officials and Employees
                                        Memorandum Circular No. 2006-163 re Foreign Travel of Local Government
                                        Officials and Employees (30 November 2()06). Based on these issuances, if a
                                        sanggunian member intends to pursue a personal or private trip that does not
                                        extend to more than three (3) months, or when such trip is to be undertaken
                                        during a period where there is no emergency or crisis, said sanggunian member
                                        shall notify the concerned Local Chief Executive in writing, with the duly
                                        accomplished leave application filed for the approval, or other appropriate action
                                        of the Local Chief Executive. In the event that the leave application is approved,
                                        the said approved leave application shall serve as the Travel Authorization
                                        relative to such personal or private trip. Before leaving, said sanggunian member
                                        shall also notify his sanggunian.
                                        On the other hand, if the period of personal or private trip of the
                                        sanggunian member extends to more than three (3) months, or during a period of
                                        emergency or crisis, a travel authority from the Honorable Secretary of fhe
                                        Interior and Local Government is required.
                                        At this juncture, may we respectfully correct the interpretation made by one
                                        of your municipal officials pertaining to the filing of leave of absence for personal
                                        reason and that for official business. According to that official, if an elective
                                        official leaves his territorial jurisdiction for three (3) days for personal reasons,
                                        the filing of an application for leave of absence is required but if it is for offi ial
                                        business, the filing of an application for leave is no longer required.
                                        We find his interpretation partly correct. Under the rules, if an elective
                                        official leaves his territorial jurisdiction for personal reasons, even for a day/ he
                                        must file the necessary application for leave since elective officials are also
                                        entitled to the same leave privileges as those enjoyed by appointive local
                                        officials, including the cumulation and commutation thereof (Section 81, RA
                                        7160). On the contrary, if he leaves for official business, naturally, he will no
                                        longer file an application for leave. He will only attach the invitation or proof at
                                        his travel is for official business.

                                        ****** Result for Image/Page 6 ******
                                        -6-
                                        Hence, after the traveling sanggunian member has complied with the
                                        foregoing procedural requirements on the filing of leave application and that the
                                        same has been duly approved, his position shall be considered temporarily
                                        vacant. There being a temporary vacancy, the rule of succession will now apply.
                                        May it be emphasized that there will be no difference in the appreciation of
                                        temporary vacancy due to local travel of an elective official for personal reason
                                        and that for official business. Under the law, one of the grounds for temporary
                                        vacancy is travel abroad. It did not qualify whether such travel abroad shall be
                                        for personal reason or for official business. Well-settled is the rule in statutory
                                        construction that when the law does not distinguish, we should not also
                                        distinguish (expressio unius est exclusio alterius).
                                        Let it be noted however that the power of the governor to appoint under
                                        Section 45 of the Code, in case where vacancy exists in the sangguniang bayan,
                                        pertains only to permanent vacancy. Though the appointing power of the
                                        governor may extend only to permanent vacancies, the same may appear likewise
                                        to be exercised by him in case of temporary vacancies. As ruled in the case of
                                        Menzon vs. Petilla (197 SCRA 251), the provision on permanent vacancies may
                                        analogously be applied to temporary vacancies. Thus, applying the foregoing
                                        rule, appointments to permanent vacancies in the sangguniang bayan, Section 45
                                        [b) of the Local Government Code requires that "only the nominee of the
                                        political party under which the sanggunian member concerned had been
                                        elected and whose elevation to the position next higher in rank created
                                        the last vacancy in the sanggunian shall be appointed". The appointee shall,
                                        therefore, come from the same political party as that of the sanggunian member
                                        who caused the vacancy and who was elevated to the position next higher in
                                        rank.
                                        Anent your second set of queries, may we invite your attention to Section
                                        376 of Local Government Code (RA 7160), to wit:
                                        "SECTION 376. Responsibility for Proper Use and Care
                                        of Government Property.—The person in actual physical
                                        possession of government property or entrusted with its
                                        custody and control shall be responsible for its proper use and
                                        care and shall exercise due diligence in the utilization and
                                        safekeeping thereof."
                                        According to you, the Sangguniang Bayan of Tayug purchased one (1) unit
                                        of second hand van and one (1) unit of brand new motorcycle. Thus, the
                                        In this
                                        Sangguniang Bayan is the owner of the aforesaid properties.
                                        Departments opinions, we are consistent in saying that the Vice- Mayor is the
                                        head of the Sangguniang Bayan. As such, he exercises control and supervision

                                        ****** Result for Image/Page 7 ******
                                        over all properties owned, assigned or issued to the Sangguniang Bayan such as
                                        the aforesaid properties.
                                        In this connection, under the rules, all government motor vehicles shall be
                                        used exclusively and strictly for official business [Section 361(d) of the
                                        Government Accounting and Auditing Manual (GAAM), Vol. 11. Having been
                                        entrusted with the custody and control of the aforesaid properties, the vice-mayor
                                        shall therefore be responsible for their proper use and care and shall exercise
                                        due diligence in the utilization and safekeeping thereof. Part of such
                                        responsibility is to see to it that the purchased vehicles are used strictly for
                                        official business.
                                        There being no official driver for your newly purchased vehicles since,
                                        according to you, the ordinance creating the position of Administrative Aide
                                        III/Driver I to officially drive the aforesaid vehicles has been vetoed by your
                                        Municipal Mayor, we are of the view that you, using your discretion being the
                                        official responsible for their proper and/or official use, may lend the same to your
                                        constituents for the purpose of transporting their ailing relatives to the hospital,
                                        to other government employees for the purpose of delivering communications or
                                        to the official driver of the Municipal ambulance even if it has a separate plantilla
                                        of positions from the Office of the Mayor. Thus, the parameter thereof shall not
                                        be on who will use drive and/or use the government vehicle but rather the manner
                                        in which the government vehicle is used. May we respectfully remind you that
                                        the aforesaid government vehigles were purchased primarily for the use of the
                                        Sangguniang Bayan and by using them, the ultimate purpose is that you will be
                                        able to discharge properly your duties and functions thereby eventually
                                        benefiting your constituents. What is incumbent upon you is to determine that
                                        the aforesaid properties are indeed used properly and/or for official business.
                                        Along this line, may we point out that the phrase "for official business"
                                        when referring to the use of the government motor vehicles, is synonymous to
                                        "public use or purpose". So that when a government vehicle is used for public
                                        purpose, the same is used !for official business. Public purpose is not
                                        unconstitutional merely because it incidentally benefits a limited number of
                                        persons (Binay vs. Domingo G . No. 92389, September 11, 1991; COA Decision No.
                                        94-222 August 11, 1994).
                                        We now come to your third set of queries. Please be informed that the veto
                                        power of the local chief executive is, by the explicit language of Section 54 of the
                                        Local Government Code of 1991, available against all ordinances enacted by the
                                        sanggunian. With regard to iresolutions, veto power can be exercised only,
                                        pursuant to Section 55 (b) and (c), of the Local Government Code, against
                                        resolutions involving local development plans and public investment programs.

                                        ****** Result for Image/Page 8 ******
                                        -8-
                                        Local chief executives are explicitly allowed to exercise their veto power only on
                                        the ground that a legislative enactment is either ultra vires or prejudicial to the
                                        pu lic welfare (Section 55, Local Government Code).
                                        The opinion rendered by the CSC is considered an executive interpretation.
                                        Upon its issuance, it will not immediately affect (e.g. nullify) the previously
                                        exercised veto power by your local chief executive. The local chief executive is
                                        presumed to have regularly exercised his veto power as well as his appointment
                                        power, unless evidence to the contrary is determined in a proper court action.
                                        What you can do is to file the proper action before the court and there you can
                                        use the CSC opinion as a matter of evidence. The CSC opinion may carry
                                        persuasive effect upon the court if the opinion is correct. Furthermore, the legal
                                        opinion, in proper cases, can also be a source of good faith on the part of the
                                        public official who acted based thereon.
                                        Anent your fourth set of queries, please be informed that Section 324 (d) of
                                        the Local Government Code of 1991 as amended by Republic Act 8185 mandates
                                        all local government units to set aside "Five percent (5%) of the estimated
                                        revenue from regular sources xxx as annual lump sum appropriations for
                                        relief, rehabilitation, reconstruction and other works or services in
                                        connection with calamities which may occur during the budget year.
                                        Provided, however that such fund shall be used only in the area, or a
                                        portion thereof, of the local government unit or other areas affected by a
                                        disaster or calamity, as determined and declared by the local sanggunian
                                        concerned. "
                                        We are of the opinion that you cannot validly change the item of Calamity
                                        Fund in your Annual Appropriations to Anti-lnsurgency/Contingency Fund.
                                        Please be informed that the term "calamity" has been defined under Section 3 of
                                        the Implementing Rules and Regulations (IRR) of RA 8185 as "a state of
                                        extreme distress or misfortune produced by some adverse circumstances
                                        or events or any great misfortune or cause, or loss or misery caused by
                                        natural forces such as earthquakes, typhoons, floods, hurricanes,
                                        epidemics or other disasters causing widespread loss of, and/or extensive
                                        damage to human lives, livestock, crops and property". In the joint DBM
                                        and DILG Memorandum Circular No. 2003-1 dated 20 March 2003, the use of the
                                        appropriation for calamity fund was expanded so as to include the relief,
                                        rehabilitation, reconstruction and other works or services in connection with
                                        man-rnade disasters resulting from unlawful acts of insurgents, terrorists and
                                        other criminals as well as for disaster preparedness and other
                                        activities. To our mind, your impending change of terminologies, that is, from
                                        calamity to anti-insurgency/contingency fund will restrict the otherwise expanded
                                        use of local calamity fund appropriation. The impending change has absolutely

                                        ****** Result for Image/Page 9 ******
                                        -9-
                                        no other reason but to restrict the usage of the fund. If the term is successfully
                                        changed to insurgencylcontingency fund, the appropriation made therein will be
                                        used exclusively for insurgency/contingency related activities.
                                        With regard to your fifth set of queries, may we invite your attention to the
                                        last portions of Sections 344 and 345 of the Code, to wit:
                                        Certification, and Approval of,
                                        "SECTION 344.
                                        Vouchers.— xxx
                                        absence or inca acit of the
                                        In case of tem ora
                                        department head or chief of office, the officer next-in-rank
                                        shall automaticall erform his function and shall be full
                                        responsible therefor." (Emphasis Supplied)
                                        "SECTION 345. Officials Authorized to Draw Checks in
                                        Settlement of Obligations.—
                                        In case of temporary absence or incapacity of the
                                        foregoing_officials, these duties shall devolve upon their
                                        immediate assistants." (Emphasis Supplied)
                                        The aforequoted provisions already indicated those officials who ill
                                        perform the functions or upon whom duties will be devolved, in cas of
                                        temporary absence of the officials concerned. May we point out however that the
                                        remedy given in the aforequoted provisions is applicable only if the absenc of
                                        the concerned officials is temporary, not permanent (e.g. non-appointment of the
                                        official concerned). To address the vacuum created, in this Departments Opi •on
                                        No. 22, series of 2006, we opined therein that " xxx the permanent absenc of
                                        the local administrator, not having appointed yet, should not b a
                                        hindrance for the local government unit to transact its usual business as
                                        it is a well-entrenched rule that the law does not require the impossib e."
                                        We further opined therein that the City Mayor could instead directly perform the
                                        functions of the local administrator based on her statutory function to "exer ise
                                        general supervision and control over all programs, projects, services nd
                                        Pleasq be
                                        activities of the city government"(Sect. 445 RA 7160).
                                        informed that the Municipal Mayor has the same statutory function embo ied
                                        under Section of the Code.
                                        With regard to your sixth set of queries, under Section 52 of the Code and
                                        Article 105 of its Implementing Rules and Regulations, for a special session t be
                                        valid, the same must meet the requirements set forth, namely:(a) there must be call

                                        ****** Result for Image/Page 10 ******
                                        -10-
                                        for a special session either by the Local Chief Executive or by the majority of the
                                        Members of the Sanggunian when public interest so demands; (b) a written notice
                                        shall be personally served to the individual sanggunian member at his usual
                                        place of residence; (3) the notice shall be served at least twenty-four (24) hours
                                        before the special session; (4) the written notice must state the date, time and
                                        purpose of the special session; and (5) no other matter may be considered at a
                                        special session except those stated in the notice unless otherwise agreed upon
                                        by 213 vote of the members present, there being a quorum.
                                        On the basis alone of your representation that there was a lack of written
                                        notice in the first special session conducted, we are of the view that the conduct
                                        of such special session, including the passage of your Appropriations Ordinance
                                        during such session, suffered from serious legal infirmity. Such defect cannot be
                                        waived by the appearance and participation of the SB members in the first speci I
                                        session. May it be noted, however, that this Department, not being a judic- I
                                        court, cannot declare said special session, together with your Appropriatiotps
                                        Ordinance passed during such session, invalid for-failure to comply with tipe
                                        provisions of law. Our opinion as to the legal infirmity of the special session s
                                        well as your Appropriations Ordinance passed therein, can be used as ground n
                                        going to court for the filing of the appropriate civil case to declare the first spec I
                                        session, and the Appropriation Ordinance passed thereon to be invalid. In t e
                                        meantime, the first special session and ordinance enjoy the presumption f
                                        regularity and are thus considered valid, unless declared otherwise by the cou
                                        As to the issue of certification by the local chief executive as urgent tpe
                                        Annual Appropriations Ordinance, please be informed that the Local Governmqnt
                                        Code recognizes the competence of the local chief executive to certify as urgqnt
                                        any ordinance or resolution to be passed by the sanggunian. However,- the Cope
                                        and its IRR failed to categorically specify as to what ordinances and(or
                                        resolutions should be certified to as urgent. Neither does there seem to be any
                                        fixed measure or, at the very least, any instance or controlling condition t at
                                        would give rise to the certification as urgent of any passage of an ordinance or
                                        resolution. We are of the opinion, however, that the authority of the local c ef
                                        executive to certify as urgent any legislative matter is granted by law in order to
                                        allow LGUs, at the instance of the local chief executive, to respond quic y,
                                        through legislative measures, any exigency of public service, public emergen y,
                                        or calamity which requires immediate attention and solution. Normally,
                                        passage of the ordinance authorizing the Annual Appropriations is certified as
                                        urgent for it relates to an exigency that requires immediate attention.
                                        Such certification of urgency of the Annual Appropriations Ordina ce
                                        implies that it need not go through the third and final reading, unless otherwise
                                        specified in the internal rules of procedures of the concerned Sanggunian. Let •t',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-087S2007',
                    'reference' => 'LO-087S2007', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE PHIL
                                        DEPARTMENT OF THE INTERIOR AND
                                        Francisco Gold Condominium II, EDSA
                                        Diliman, Quezon Ci
                                        OFFIC OF UNDERSEQETARY
                                        HON. WILHELMINO M. SY-ALVARADO
                                        Vice Governor
                                        Provincial Capitol Building
                                        Malolos City, Bulacan
                                        Dear Sir:
                                        PINES
                                        OCAL
                                        r. Mapa
                                        LO
                                        VERNMENT
                                        mahal St.,
                                        AL GOVERNMENT
                                        . 211)
                                        October 05, 2007
                                        This refers to your two (2) letters reques ing for our legal opinion on the
                                        issues thereat which we herein consolidated, viz:
                                        1.
                                        2.
                                        Is an appropriation ordinance ena ed b the Sanggunian
                                        Panlalawigan to re-align or revert (ilil pat) funds from Personal
                                        Services (PS) and Operating Expe ses ( OOE) and other
                                        services of the Office of the Vice- overno [Presiding Officer
                                        which are not yet savings or unexpen ed bal nces for the year
                                        2007 to various offices under the Offic of the Governor VALID?
                                        Whether the Memorandum dated 13 eptember 2007 from the
                                        Office of the Governor of Bulacan, addressed to the Office of the
                                        Sangguniang Panlalawigan, through
                                        Governor, requesting to earmark
                                        65,376,169.20) not in conflict with
                                        Government Code (LGC) of 1991?
                                        As to your first issue, please be informed
                                        upon the validity of a duly enacted Ordinance, s
                                        the reason that it is a matter for the courts to res
                                        the presumption of validity although the questio
                                        judicial inquiry.
                                        I DOJ Opinion No. 123 s 1985, citing Victorias Milling Co. Inc.
                                        SCRA 192
                                        the O ice of the Vice-
                                        the mount of (Php
                                        ection 336 of the Local
                                        hat thi Department cannot pass
                                        ch as the subject Ordinance, for
                                        Ive. A ordinance carries with it
                                        of its r asonableness is open to
                                        v Mun. o Victorias, Negros Occidental, 25

                                        ****** Result for Image/Page 2 ******
                                        Nonetheless, only for academic discussi n, ma we note the following
                                        observations which we deemed are proper to fo we b lieve that these are the
                                        linchpins of your query, thus:
                                        I. Is "paglilipat" in the aforesaid Ordina ce NO! 2007-04 means
                                        realignment, augmentation or reversion of fun s?
                                        2. Is Ordinance No. 2007-04 indeed a sup lemental budget?
                                        If said "paglilipat" means realignment, it is our pinion that the subject
                                        Ordinance violated the law2 which provides that budge ary realignment may be
                                        had in times of public calamity and should compl with the certification
                                        requirement indicating therein the sources of fu ds avalable for appropriations,
                                        as certified under oath by the local treasurer and I cal ac ountant and attested by
                                        the local chief executive, and the various items o appro riations affected and the
                                        reason for the change. If said "paglilipat" mean aug entation, the same also
                                        violated the provision of the law3 which states tha augm ntation of funds may be
                                        done only within respective offices from savin s in 0th r items within the same
                                        expense class of respective appropriations. Finally, if th same means reversion,
                                        as indicated in said Ordinance, it failed to comp y with Section 322 of the LGC
                                        which provides "unex ended balances of a ro riation uthorized in the annual
                                        appropriation ordinance shall revert to the una ro riated sur lus of the general
                                        fund at the end of the fiscal year xxx". (Emphasis ours)
                                        Furthermore, if Ordinance No. 2007-
                                        is i deed a supplemental
                                        appropriation, it should have complied with:
                                        The requirement of review with the D partm nt of Budget and
                                        Management pursuant to Section 326 f the LéC of 1991.
                                        Section 321 of the LGC, which in pa provi es that "xxx, no
                                        ordinance providing for a supplemental budge shall be enacted,
                                        except (a) when su orted b fund actuall available4 as
                                        2Section 321 of the LGC
                                        3
                                        Section 336 of the LGC
                                        4 "Funds actually available" shall mean the amount of oney a ually collected as certified by
                                        the local treasurer at any given point during the fisca year Pich is over and above the
                                        estimated income collection for that point in the year. T us, funds are actually available when
                                        realized income exceeds estimated income as of any giv n day, onth of quarter of the said
                                        fiscal year. Funds are likewise deemed actually availabe when there are savings. For this
                                        purpose, savings refer to portions or balances as of an given oint in the fiscal year of any
                                        programmed or allotted appropriation which remain free f any o I ligation or encumbrance and
                                        which are still available after the satisfactory completion of the navoidable discontinuance or
                                        abandonment of the work, activity or purpose for w ich the appropriation was originally
                                        2

                                        ****** Result for Image/Page 3 ******
                                        certified by the local treasurer or (b) b new r venue sources or
                                        (c) in times of public calamity."
                                        Section 336 of the LGC of 1991, whi h proyides that " Use of
                                        Appropriated Funds and Savings -
                                        unds phall be available
                                        exclusively for the purpose for hich hey have been
                                        appropriated. No ordinance shall b pass d authorizing any
                                        transfer of appropriation from one item to anot er."
                                        Parenthetically, there seems to be inco patibil!ty between Section 321
                                        and 336 of the LGC. Allow us then to reconcile the tw provisions. The former
                                        speaks of annual budget while the latter provi es for the use of appropriated
                                        funds and savings. Hence, as a general rule, o supqlemental budget may be
                                        enacted if the local chief executive concern d ha already submitted the
                                        executive budget to the sangyunian or after th annu I budget shall have been
                                        authorized by the sanggunian . However, this r le adm ts of two exceptions, i. e.
                                        when (a) the supplemental budget is supporte by fu ds actually available as
                                        certified by the local treasurer or by new revenu sourc s; or (b) there is a public
                                        calamity. Otherwise, if these two (2) exceptions are no availing, Section 336 of
                                        the LGC shall apply. Thus, if there is already an approp iation ordinance and any
                                        one of the above exceptions is not present, pur uantt Section 336, funds shall
                                        be available exclusively for the specific purp se fo which they have been
                                        appropriated and no ordinance shall be pas ed au horizing any transfer of
                                        appropriation from one item to another. In t is situqtion, what is allowed is
                                        augmentation8 of fund but only within respectiv offices and from savings within
                                        same expense class of respective appropriation . (Emp asis supplied)
                                        authorized, or which result from un-obligated compen tion an related costs pertaining to
                                        vacant positions and leaves of absences without pay.(Bud et Oper tions Manual for LGUs)
                                        Per Budget Operations Manual for LGUs, "New Revenu Sourc s" refers to money measures
                                        not otherwise considered during the preparation and e actment of the annual budget. Such
                                        revenue measures include ordinance passed by the Sang unian uring the fiscal year but after
                                        the annual budget had already been enacted into law w ich imp ses new taxes, charges, fees,
                                        fines or penalties, or which raising existing local taxes, harges, ees, fines or penalties. Such
                                        revenue sources also include new or higher remittances, ontributions, subsidies or grants in aid
                                        from the National Government or from government cor rations a d private entities which have
                                        not been included in the estimate of income which served s basis or the annual budget.
                                        6 Section 321 of the LGC
                                        Budget Operations Manual for LGUs by the Joint Resoluti n of th DBM and COA, p. 18
                                        8
                                        Article 454, IRR of the LGC states Augmentation im lies the existence in the budget of an
                                        item, project, activity or purpose with an appropri tion which upon implementation or
                                        subsequent evaluation of needed resources is determined o be de icient".
                                        3

                                        ****** Result for Image/Page 4 ******
                                        As to your second issue, it is our opinion hat subject Memorandum dated
                                        13 September 2007 issued by the Governor, w ich re uests for the earmarking
                                        "paglalaan" of (Php 65,376,169.20) from the
                                        ce of t e Vice-Governor for the
                                        different offices under the executive department of said Province should comply
                                        with the provision of Section 336 of the LGC entencp number two (2) thereof
                                        provides that "the local chief executive or the pr siding Officer of the Sanggunian
                                        concerned may, by ordinance, be authorized to au ment any item in the
                                        approved annual budget for their respective offi es from savings in other items
                                        within the same expenses class of their respec ive ap ropriations". Therefore,
                                        limitations on the augmentation of funds under his proyision are: (1) it must be
                                        taken from savings within the same expense class i.e. PS, MOOE, Capital
                                        Outlay) from the respective appropriations; nd (2) must only be for the
                                        respective offices of the aforementioned departm nts of he LGUs.
                                        Assuming that the sources of funds fo the s pplemental budget are
                                        indeed savings as defined herein and as provid d for i the Budget Operations
                                        Manual for LGUs, it is still wanting of a certificat on by he Local Treasurer as to
                                        the availability of the same. And the subseq ent su plemental appropriation
                                        ordinance thereof should be subjected for revie by t e Department of Budget
                                        and Management as provided for by law.
                                        We hope to have enlightened you on the atter.
                                        Very truly yours,
                                        A STERE A. PANADERO
                                        Undersecretary
                                        Legal/10
                                        cc: Director Josefina Castilla-Go
                                        DILG Regional Office No. 03
                                        San Fernando City, Pampanga
                                        4',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-054S2007',
                    'reference' => 'LO-054S2007', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY
                                        54
                                        July 12, 2007
                                        ATTY. EUGENIO v. JURILLA
                                        City Secretary
                                        Quezon City
                                        Dear Hon. Jurilla:
                                        This pertains to your letter seeking for our legal opinion as to what
                                        undertakings of LGUs that are subject to public hearings as a condition
                                        precedent before an ordinance may be validly enacted.
                                        Relative to the above, please be informed that under the Local
                                        Government Code of 1991 (RA 7160), prior public hearings are required where:
                                        (1) local government site, offices and facilities are to be transferred (par. b and
                                        par. c, Section 11, RA 7160); (2) reciassification of agricultural lands (Sec. 20,
                                        ibid); (3) contribution of funds, real estate, equipment, and other kinds of
                                        property and appointment or assignment of personnel in support of
                                        undertakings cornmonly beneficial to local government units which have
                                        grouped themselves, consolidated or coordinated their efforts, services and
                                        resources (Sec. 33, ibid); (4) levy of taxes, fees or charges on any base or subject
                                        not otherwise specifically enumerated in the Local Government Code as taxed
                                        under the NIRC, as amended, or other applicable laws (Sec. 186, ibid); and (5)
                                        enactment of local tax ordinances and revenue measures (Sec. 187, ibid).
                                        We hope we have guided you accordingly.
                                        Very truly yours,
                                        AUSTERE A. RO
                                        DIRECTOR RODOLFO S. FERAREN
                                        DILG - NCR
                                        LMP Bldg., Ermin Garcia Street
                                        Cubao, Quezon City
                                        Legal:28/MerJe',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-052S2007',
                    'reference' => 'LO-052S2007', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        A. Francisco Gold Condominium II Bldg, EDSA
                                        corner Mapagmahal St., Diliman, Quezon City
                                        OFFICE OF THE UNDERSECRETARY FOR LOCAL GOVERNMENT
                                        52
                                        13 July 2007
                                        ATTN. JOSE JESUS G. LAUREL
                                        Vice-President for Legal and External Affairs
                                        General Counsei
                                        Petron Corporation
                                        Petron Mega Plaza
                                        358 Sen. Gil Puyat Avenue
                                        Makati City
                                        Dear Atty. Laurel:
                                        This has reference to your earlier letter asking our opinion
                                        on
                                        whether or not Ordinance No. 171-06, which was passed by the
                                        Sangguniang Bayan of Limay, Bataan and approved by the Municipal
                                        Mayor, is valid.
                                        In your letter, you represented that on 03 April 2007b the
                                        Sangguniang Bayan of Limay, Bataan enacted Ordinance No. 171-06,
                                        entitled "An Ordinance Requiring Proponents of any Industrial, Commercial
                                        or Agricultural Establishment that may cause Environmental and Socio-
                                        Economic Impacts to Obtain an Approved Sangguniang Bayan Resolution
                                        Accepting to Host Such Undenaking prior to the issuance of the Required
                                        Clearances, Permits and Licenses to Implement the Project". On even
                                        date, Municipal Mayor Nelson C. David approved the same. On this date,
                                        the subject ordinance has already taken effect after compliance with the
                                        required posting period.
                                        You further represented in your letter that as one of the two (2)
                                        corporations with refineries in the entire country and the only one with
                                        government ownership, Petron always seeks to modernize and upgrade its
                                        existing refinery- With the passage of the subject ordinance which

                                        ****** Result for Image/Page 2 ******
                                        imposes an additional requirement of securing a "resolution of hosting"
                                        prior to the issuance of the required clearances, licenses and permits for
                                        the implementation of a project, Petron is unable to proceed with the
                                        modernization and upgrading of its refineries.
                                        Hence, it is now your contention that Ordinance No. 171-06 is invalid,
                                        unconstitutional, oppressive, arbitrary and beyond the power of the
                                        Sangguniang Bayan of Limay to enact for the following reasons, whicn we
                                        quote in toto frorn your letter:
                                        It effectively amends a general law, P.D. 1096,
                                        othemise known as the national Building Code: as the ordinance
                                        has the effect of imposing the additional requirement of a
                                        "resolution of hosting" prior to the issuance of a building permit,
                                        (2)
                                        It does not merely regulate but has a prohibitory effect
                                        since the local government of Limay has discretion to deny the
                                        issuance of permits if no favorable endorsement for the
                                        implementation of the project is secured from the Linnay
                                        Environmental Quality Council;
                                        (3)
                                        It violates Section 1: Article Ill of the 1987 Philippine
                                        Constitution since it amounts to a deprivation of property without
                                        due process of law. The ordinance confers discretionary power
                                        upon the Limay Environmental Quality Council (LEQC) to approve
                                        or disapprove a business or the implementation of a project within
                                        the municipality of Limay, thereby depriving the property owner the
                                        economica; and beneficial use of the right to develop the property.
                                        The means adopted by the Sangguniang Bayan of Limay are not
                                        reasonably necessary for the accomplishment of the avowed
                                        purpose of protecting the environment:
                                        (4) The LEQC is actually allowed to usurp the powers
                                        conferred upon national agencies such as the DENR particularly
                                        with respect to the issuance of environmental compliance
                                        certification and permit to construct/operate pollution control
                                        devices. The ordinance in effect clipped the power of the DENR to
                                        evaluate and decide a projects impact on the environment. And
                                        even if the DENR so decides, any permit issued by it Wii; be
                                        rendered inutile in the absence of a favorable endorsement of the
                                        LEQC, which does not have the competence, technical skills;
                                        knowledge and experience to make a thorough scientific study of a
                                        projects proposed impact on the environment.
                                        At the outset, please be informed that since Ordinance No. 171-06
                                        was enacted by the Sangguniang Bayan of Limay, duly approved by the

                                        ****** Result for Image/Page 3 ******
                                        Municipal IVIayor and has undergone the procedural requirements for its
                                        effectivity, the same is considered valid unless declared invalid by the
                                        proper court. As such, any issue or question thereon as to its substantive
                                        validity and enforceability should be addressed by filing a special civii
                                        action for declaratory relief before the proper court in accordance with
                                        Sections 1 and a, Rule 63 of the Revised Rules of Court, which provide and
                                        we quote:
                                        "SECTION 1. Who may file petition.—Any person
                                        interesteu under a deed, will, contract or other written
                                        instrumene, or whose ri hrs are affected b a statute,
                                        executive order or regulation, or ordinance, or any other
                                        governmental regulation may, before breach or violation
                                        thereof, bring an action in the appropriate Regional Trial
                                        Court to determine any question of construction or
                                        validity ggising, and for a declaration of his rights or
                                        duties thereunder.
                                        (Emphasis Supplied)
                                        "SECTION 4. Local government ordinance. In any
                                        action involving the validity of a local government
                                        ordinance, the corresponding prosecutor or attorney of
                                        the local government unit involved shall be similarly
                                        notified and entitled to be heard. If such ordinance is
                                        alleged to be unconstitutional, the Solicitor General shall
                                        be notified and entitled to be heard."
                                        Moreover, should you find the "resolution of hosting" in the subject
                                        ordinance as an additional requirement on top of those required by existing
                                        rules and reguiations of national agencies (e.g. DENR) for the issuance of
                                        the required clearances, licenses and permits to implement a project, a
                                        case in point is Villacorta vs. Bernardo (143 SCRA 480). The Supreme
                                        Court held in this case that ordinances amending and so violating national
                                        laws in the guise of implementing them by imposing additional
                                        requirements ace ultra vires.
                                        We hope mat we have addressed your concern accordingly.
                                        Ve truly yours,
                                        AUSTERE A.
                                        OIC, OUSLG
                                        Legal/ 1 7',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-029S2007',
                    'reference' => 'LO-029S2007', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE PHILIP INES
                                        DEPARTPIENT OF THE INTERIOR AND AL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA r. Mapagmahal St.,
                                        Diliman, Quezon City
                                        FFiCE OF UNDERSECRETARY FO LOCAL GOV*NIMIEEW
                                        29
                                        16 March 2007
                                        MR. MANUEL P. SOLOMON
                                        ff,rpunong Barangay
                                        .iilßArangay Tunasan, Muntinlupa City
                                        Dear Siri
                                        This pertains to your letter requesting for a legal opinion on the validity
                                        nd enf ceåbility of Barangay Ordinance No 5-04 dated 21 February 2005,
                                        hich (aq thorized the increase of the allowance of barangay officials of your
                                        *Febaranga in relatioq to the enactment of RX 9 40, also known as "An Act
                                        8iF!4mending Republic Act No. 9164 Resett ng the Barangay and SK
                                        *4iæZec •oes and For Other Purposes".
                                        B way of a background, you stated that o r aforesaid barangay ordinance
                                        rovided for the increase in the monthly allowan e of mandatory appointive and
                                        barangay officials. That based on S ction 391 (10) of the Local
                                        overnment Code, the said increase shall take eff ct only after the term of office
                                        infumbent elective barangay officials who pproved the same, i.e. after 30
                                        .Nove(pb$r 2005. You emphasized that the ter of office of the incumbent
                                        ttbarangay officials of Tunasan expired on 30 N vember 2005 as provided for
                                        i t!qnder Section 1 of RA 9164 but on 22 September 2005, RA 9340 was passed and
                                        approved amending RA 9164, extending the term f office of barangay officials by
                                        postponing the supposed 31 October 2005 bara g y elections to the last Monday
                                        of ctober 2007.
                                        iFebruary 2006, said ordinance was ransmitted to the City Council
                                        nt I"pa City for review but the said eo ncil failed to take any action
                                        hereönt ithin the irequired period of thirty O) days from receipt thereof.
                                        Henge; you are of the view that the same is alread deemed approved pursuant to
                                        upsSectidn 57 (b) of the Local Government Code.

                                        ****** Result for Image/Page 2 ******
                                        0
                                        {Against the foregoing background, you no posed the following queries
                                        d e quote:
                                        1 Y "Are the incumbent Barangay Tunasan officials,
                                        whose terms of office were exten ed pursuant to Rep.
                                        Act 9340, be now entitled t the increase in
                                        ovided for under
                                        altowance/compensation as
                                        Barangay Ordinance No. 05-04 ithout violating the
                                        provision of Sec. 391 (10) of th Local Government
                                        Provide , however, that no
                                        Code, which states,
                                        ,increase. in the compensation" r honoraria of the
                                        . sangguniang barangay member shall take effect
                                        until after the expiration of t e fuzz term of au
                                        members of the sangguniang arangay approving
                                        such increase"?
                                        ! 2, Is Barangay Tunasan Ordinan e No. 05-04 dated
                                        February 21, 2005 not vioZat!v of and considered
                                        within the purview of Sec. 3. of Department of
                                        Budget and Management (DBM) cal Budget Circu Zar
                                        No. 63 dated October 22, 1996?"
                                        Your first query may have been impelled b your belief that the additional
                                        iki
                                        lerm of office of elective barangay officials from November 2005 to November
                                        *007 per RA 9340 is only an "extension" f the original term of office of
                                        elective barangay officials which was set from ugust 2002 to November 2005
                                        under RA 9164. Accordingly, one may argue th t the increase of allowance of
                                        elective and appointive barangay officials ca Iready be made effective after
                                        November 2005 and will not violate Section 39 (10) of the Local Government
                                        Code;cohsidering that at that point in time, thy erm of office of the incumbent
                                        iparangay,officials had already expired and thal from that time up to November
                                        .2007; said officials are merely serving their exte ed term of office.
                                        Before replying to your queries, we find t mperative to reconcile RA 9164
                                        and RA 9340. The pertinent provisions of sai I ws which are relevant to your
                                        are the following:
                                        In RA 9164 (approved on 19 March 2 0 ), may we quote the following
                                        e ions:
                                        "SECTION 1. Date of Elect on.- There shall be
                                        synchronized barangay and sa guniang kabataan

                                        ****** Result for Image/Page 3 ******
                                        elections which shall be held n July 15, 2002.
                                        1 Subsequent synchronized baranga and sangguniang
                                        kgbataan elections shall be held on " Zast Monday of
                                        tober and every three (3) years t reafter. "
                                        "SEC. 2. Term of Office.- Th term of office of au
                                        and:sangguniang kabata n officials after the
                                        effectivity Of this Act shall be three (3) years."
                                        In RA 9340 (approved on 22 Septem er 2005), may we quote the
                                        kiollpyv
                                        ing sections:
                                        "SECTION 1. Section 1 of Re ubZic Act No. 9164 is
                                        hereby amended to read as follows:
                                        "SECTION 1. Date of lection.- There
                                        l;shatt be synchronized arangay and
                                        sangguniang kabataan electi ns which shatt
                                        Subsequent
                                        be held on July 15, 20?
                                        synchronized barangay an sangguniang
                                        kabataan elections shatt be eld on the last
                                        étr
                                        Monday of October 2007 an every three (3)
                                        years thereafter. "
                                        "SEC. 2. Section 4 of Rep blic Aft No. 9164 is
                                        ereby a nded to read as follow :
                                        "SEC. 4. Assumption of Office.- The
                                        term of office of the barangay and
                                        tsangguniang kabataan I o ficiaZs elected
                                        under this Act shall com nce on August
                                        i 215, 2002, next following the r elections. The
                                        li.$term •of office of the barangay and
                                        sangguniang kabataan offi iaZs elected in
                                        the October 2007 election and subsequent
                                        at d noon of
                                        {elections shalt commenc
                                        November 30 next following heir elections."
                                        n harmonizing the provisions of both la s, the following conclusions are
                                        Since„RA 9340 did not repeal neither mend Section 2 of RA 9164, the
                                        o iee of barangay officials is still three 3) years. This is further bolstered

                                        ****** Result for Image/Page 4 ******
                                        Q
                                        f ct that Sect on of RA 9164 as reworde by Section 1 of RA 9340 now
                                        hat+ synchronized b rangay and sangguniang
                                        fen •elections i?hazz be held on th Zast. Monday of October
                                        7 Ord every three years thereafter".
                                        l!gs likewise important to stress that, as nded by Section 2 of RA 9340,
                                        of. RA 9164 is now worded that the ter of office of barangay and SK
                                        elected under said Act (referring to RA 9164) shall commence on 15
                                        sft 02jpext following their elections. The e m of office of barangay and SK
                                        ed in the 2007 October election s all commence at noon of 30
                                        R 07 following the October 2007 electi ns.
                                        Hence, it i clear that the barangay official term of office is still three (3)
                                        s fixed by Section 2 of RA 9164 which was amended by RA 9340. But for
                                        legted in the 15 July 2002 barangay elections, their term of office was fixed
                                        9340 end at noon of 30 November 20 7 following the October 2007
                                        : and thereafter, the term of office pf barangay officials from 2007
                                        nw Fids; hall still be for three years again, per Sec ion 2 of RA 9164.
                                        With the foregoing discussion, it is, theref re, somehow erroneous to say
                                        erm of office of barangay officials electe in the .15 July 2002 barangay
                                        lec has: been e tended up to November 200 . We believe that the proper
                                        Qtewretation •shoul be;ithat for those barangay fficials elected in the 15 July
                                        90? bqr ngay elections, the law, which is RA 94 , fixeg their first term of office
                                        1,f.Qllqwin ; their elec!ion to be at five (5) yea s, which shall end at noon of
                                        Nqvrmb%r 2007, but for the succeeding elected b rangay officials, their term of
                                        ff h II QhlYlbe for three (3) years.
                                        re, in reply to your first query as t whether or not the increase
                                        rangay officials of Tunasan can already e made effective from 2005 to
                                        correspqnding term of office simply efers to an extended term, we
                                        vi$YV that this position is not legally tena le. The 2005-2007 term is still
                                        .er.t10 term of office of those barangay offici Is elected in 2002, whose term
                                        f. off
                                        , s earlier stated, was fixed by RA 9340 to be up to 2007 or five (5) years.
                                        en e, since it is covered by Section 391, par. 10 f the Local Government Code,
                                        tsuc
                                        e
                                        to
                                        ipqrgasq can be made effective only for thk)S barangay officials elected for
                                        erm.É2007-2010 and onwards. But this opini n shall not apply to barangay
                                        officials, Ithej\ reason being that they have no participation in the
                                        a}wn the I bakangay ordinance which increased their allowances.
                                        forl baran$ay eppointive officials, their ncrease. can be made effective
                                        t at of the qpproval of the barangay ordi ance.

                                        ****** Result for Image/Page 5 ******
                                        ith respect to the review of Barangay O dinance No. 05-04, may we note
                                        review of such kind of ordinance is not overned by Section 57 (b) of the
                                        Lp91tGovernment! Code as this provision per ins to the review of ordinary
                                        ordinances. The applicable provision or the review of your barangay
                                        .rpviding for supplemental budget t fund the proposed increase is
                                        g )4Section 333 of the Local Governm nt Code. Said section refers to
                                        tht by the Sangguniang Bayan of the an ual appropriations ordinance of
                                        the a ngay, Considering that the supplement I budget is in furtherance of the
                                        annual pppropriations ordinance, the review ther of is governed by Section 333 of
                                        [the] Government Code. Hence, under the said section, if the Sangguniang
                                        ihyqn iook no action thereon within 60 days fter its receipt of the barangay
                                        ipaqce, the same shall continue to be in full f rce and effect.
                                        n youn second query, Section 3. of" DBM Local Budget Circular
                                        dated2? Oftohpr 1996 provides for the limitations of the adjusted rates of
                                        1 pes\of barangay officials which provides or thet salary grade equivalence.
                                        I  t egard; may wedsuggest that consideringt at the subject matter of Section
                                        3 all?! under the expertise of the DBM or at the local level, that of the Municipal',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-015S2008',
                    'reference' => 'LO-015S2008', // Ensure unique reference
                    'extracted_texts' => 'REPUBLIC OF THE PHILIPPINES
                                        DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.,
                                        DILG OPINION NO
                                        Diliman, Quezon City
                                        O*IC OF UNDERSEQETARY FOR LOCAL
                                        08 April 2008
                                        VICE MAYOR ELENA C. USMAN
                                        Dinalungan, Aurora Province
                                        Dear Vice Mayor Usman:
                                        This pertains to your letter seeking our Departments guidance as to
                                        whether or not certain Resolutions, as shall be hereunder enumerated, are valid
                                        and in conformity with the national implementing laws and thus, are sufficient to
                                        prohibit logging activity in your municipality.
                                        You stated that your Sanggunian came up with the following Resolutions,
                                        15
                                        to wit:
                                        Kapasiyahan Big. 2008-045 -
                                        Kapasiyahan Big. 2008-046 -
                                        Kapasiyahan Blg. 2008-047 -
                                        ISANG KAPASIYAHANG HUMIHILING SA
                                        KGG. JOSE L. ATIENZA, KALIHIM NG
                                        DEPARTMENT OF ENVIRONMENT AND
                                        NATURAL RESOURCES NA KANSELAHIN
                                        ANG NAIGAWAD NA CLEARANCE HINGGIL
                                        SA "FIVE YEAR INTEGRATED OPERATIONS
                                        PLAN" NG INDUSTRIES DEVELOPMENT
                                        CORPORATION O IDC PARA SA TAONG
                                        2008-2026 SA ILALIM NG INTEGRATED
                                        FOREST MANAGEMENT AGREEMENT
                                        (IFMA) NO. 2001-06 SA BAYAN NG
                                        DINALUNGAN, AURORA
                                        ISANG KAPASIYAHANG NAGPAPAHAYAG
                                        NG PAGTUTOL SA ANUMANG URI NG
                                        LOGGING ACTIVITIES NA ISASAGAWA NG
                                        SINOMANG KUMPANYA DITO SA BAYAN
                                        NG DINALUNGAN, AURORA
                                        ISANG KAPASIYAHANG MAGALANG NA
                                        HUMIHILING SA KGG. TITO T. TUBIGAN,

                                        ****** Result for Image/Page 2 ******
                                        Kapasiyahan Big. 2008-048
                                        -2-
                                        PUNONG
                                        BAYAN
                                        HUWAG
                                        PAHINTULUTAN
                                        ANG
                                        ANUMANG
                                        TRANSAKSYON NA MAY KAUGNAYAN SA
                                        LOGGING AT MINING SA BAYAN NG
                                        DINALUNGAN, AURORA
                                        A RESOLUTION ADOPTING COURT
                                        DECISION: MINORS OF THE PHILIPPINES
                                        VERSUS DENR, ET AL., G.R. NO. 101083
                                        JULY 30, 1993, 224 SCRA 792:lLM (1994)
                                        AGAINST LOGGING
                                        In reply thereto, allow us first to distinguish a resolution from an ordinance.
                                        As defined in a long line of Supreme Court cases, a resolution is a measure
                                        adopted by the Sanggunian whereby its collective views, opinions and
                                        sentiments are being expressed. On the other hand, an ordinance is passed by
                                        the Sanggunian providing for a permanent rule of conduct and is considered a
                                        local law applicable within the territorial jurisdiction of the local government unit
                                        concerned based on the delegated authority of Sanggunians to exercise local
                                        legislative powers under Section 48 of the Local Government Code.
                                        Along this line, prohibiting or regulating certain activities in a locality would
                                        require the passage of a local law, which in your case, should be an ordinance
                                        and not a mere resolution. This has to be so because prohibition or regulation of
                                        a certain activity is essentially a legislative power which, therefore, should come
                                        either as a law passed by Congress, or by an ordinance passed by the local
                                        legislative bodies which, under Section 48 the Local Government Code, are the
                                        Sanggunians of the different levels of local government units.
                                        The abovecited Resolutions of that Sanggunian would clearly show that
                                        the members simply manifested their sentiments, views and opinions as a
                                        collective body on logging activities. Hence, said Resolutions cannot suffice to
                                        prohibit logging activities in your municipality as the same did not provide for a
                                        permanent rule of conduct. Therefore, should your municipality wishes to prohibit
                                        or regulate logging activities in the area, the proper Sanggunian action should be
                                        contained in an ordinance and not a mere resolution.
                                        May we invite your attention, however, to some Supreme Court cases
                                        which enunciated the rule and substantive requirement in ordinance-making as
                                        an exercise of the legislative powers by the Sanggunians.
                                        In the case of Magtajas ys. Pryce (G.R. No. 111098, 20 July 1994), and
                                        the case of Tatel ys. Municipality Virac (207 SCRA 157), and in other long line
                                        of cases, the Supreme Court ruled that for an ordinance to be valid, the following
                                        requisites must be observed: (a) an ordinance must not contravene the law

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        (passed by Congress) and the Constitution; (b) an ordinance cannot allow what is
                                        prohibited by law; (c) an ordinance cannot prohibit what is allowed by law but it
                                        can regulate; (d) an ordinance must not prohibit but may regulate trade; (e) an
                                        ordinance must not be unfair or oppressive and must not be partial or
                                        discriminatory; (f) an ordinance must not be unreasonable and must be general in
                                        application and consistent with public policy.
                                        After citing the substantive requirements for a valid ordinance, the issue
                                        that will now be brought before us is whether or not an ordinance passed by your
                                        municipality can validly prohibit logging activities.
                                        In answering the same issue, it is relevant to emphasize that logging is not
                                        peg se illegal. Said activity becomes illegal only if done without the
                                        corresponding clearances set forth by law for such activity. On this score, it is
                                        wise to note that logging activity is permissible provided that it shall secure
                                        clearances or approval from the Department of Environment and Natural
                                        Resources (DENR), the agency of the government tasked to regulate such
                                        activity.
                                        In applying the foregoing principles in your instant query, it is noted that
                                        Industries Development Corporation (IDC) was issued a 5-year operation plan
                                        under IMFA 2001-06 to operate logging activities within the Municipalities of
                                        Dinalungan, Casiguran and Dilasag, which was duly approved by DENR
                                        Secretary Jose L. Atienza, Jr. Hence, since this logging activity of IDC was
                                        authorized by the DENR based on a power conferred upon it by law, an
                                        ordinance cannot prohibit the logging activities of IDC or any other entity
                                        engaged in logging activities but it can merely regulate.
                                        We hope to have enlightened you on the matter.
                                        Very truly yours,
                                        AUSTERE A. PANADERO
                                        Undersecreta
                                        Legal:43/La
                                        cc: Director Josefina Castilla-Go
                                        DILG Regional Office No. 03
                                        San Femando City, Pampanga',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-001S2007',
                    'reference' => 'LO-001S2007', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        Francisco Gold Condominium II, EDSA cor. Mapagmahal St.
                                        Diliman, Quezon City
                                        OFF:læ OF J.JNOERSEOQElrARY FOR LOCAL GOVERNMENT
                                        02 January 2007
                                        MR. ROLANDO M. LARRACAS
                                        Sangguniang Bayan Member
                                        Boac, Marinduque
                                        Dear SB Member Larracas:
                                        This refers to your letter seeking our legal opinion on the following
                                        issues, to wit:
                                        1. "Can a valid and effective ordinance, approved by
                                        both Sangguniang Bayan and the Sangguniang
                                        Pantatawigan and not otherwise declared by a court
                                        of competent jurisdiction to be unconstitutional, (be)
                                        suspended by the Local Chief Executive?
                                        2. Is the opinion of the CSC field officer a rational legal
                                        basis to suspend implementation?
                                        3. Is the continuous proposal of annual appropriations
                                        to fund a repeated organizational structure accepted
                                        as a legal tool to circumvent the mandated duties of
                                        the Local Chief Executive provided under Section 444
                                        of the Local Government Code of 1991 ? And
                                        4. What would be or what is the extent of liability of
                                        the Sangguniang Bayan whose explicit duty in
                                        providing remedy to the budget remains remised or
                                        its responsibility and unperturbed to the non-
                                        implementation of the reorganizational ordinance?"
                                        You stated that your municipality passed Municipal Ordinance No. 03-
                                        091 (reorganizational ordinance) providing for the reorganization of the
                                        organizational structure and staffing pattern of that municipal government.
                                        Upon review by the Sangguniang Panlalawigan, the same was declared
                                        consistent with law. It became then a necessity to appropriate funds to
                                        meet the financial outlay for the newly created offices and salaries under the
                                        new staffing pattern since the same was not covered by the Annual Regular
                                        Appropriations which was approved on 1 5 December 2003. Thus, on 1 5
                                        March 2004, the municipality came up with a revised Annual Budget for
                                        2004 in order to provide for the necessary funds for the newly created
                                        offices. However, upon review by the Sangguniang Panlalawigan, the
                                        revised Annual Budget for 2004 was declared to be inoperative and
                                        unenforceable because it went beyond the limitations set forth under Section

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        325 of the Local Government Code, particularly the provision on personnel
                                        services limitations. In the meantime, the CSC field office thereat issued an
                                        opinion that the appointments under the new staffing patter cannot be given
                                        due course and further opined that the municipality should return to the old
                                        personnel structure since the revised Annual Budget for 2004 was declared
                                        inoperative by the Sangguniang Panlalawigan. Based on these supervening
                                        events, the implementation of the new reorganizational ordinance was
                                        suspended by the Local Chief Executive. Hence, your abovequoted queries.
                                        In reply to your first query, Section 444 (b) (2) of the Local
                                        Government Code mandates that it is the duty of the Municipal Mayor to
                                        enforce all laws and ordinances relative to the governance of the municipality
                                        and precisely under paragraph iii of the same section, the Municipal Mayor is
                                        empowered to issue such executive orders as are necessary for the proper
                                        enforcement and execution of laws and ordinances. Together with such
                                        mandate, the Municipal Mayor is given oversight powers, functions and
                                        duties to see to it that laws and duly approved ordinances are effectively and
                                        efficiently implemented and executed within his territorial jurisdiction.
                                        The Municipal Mayor, however, is not required to perform the
                                        impossible, such as in this instant case where the Sangguniang Panlalawigan
                                        disapproved the appropriation ordinance intended to fund the implementation
                                        of the reorganizational ordinance. In such a case, it is also well within the
                                        oversight functions of the Municipal Mayor to, in the meantime, suspend the
                                        applicability of an ordinance due to legal impossibility of its execution. He
                                        need not even expressly suspend it since whether the same is suspended or
                                        not, its execution would be dependent on the passage of an appropriation
                                        ordinance which shall fund the implementation of the reorganizational
                                        ordinance. But that notwithstanding, it is also equally his primordial duty to
                                        properly exercise the same oversight functions and powers by directing,
                                        without further delay, his concerned department heads to make the
                                        necessary adjustments in the revised Annual Budget to conform with the
                                        review findings of the Sangguniang Panlalawigan and the law. Considering
                                        that the Municipal Mayors task and duty is to implement an approved
                                        ordinance, it is likewise incumbent upon him to perform his oversight
                                        function by performing the necessary legal ways to have the reorganizational
                                        ordinance implemented, e.g., by directing the department heads to make the
                                        necessary adjustments in the revised appropriation ordinance so that the
                                        reorganizational ordinance can already be executed and implemented.
                                        Hence, in your instant query, we believe that the suspension of the
                                        reorganizational ordinance, whether express or implied, was not improper but
                                        the unjustifiable delay in making the necessary corrections on the revised
                                        appropriations ordinance would render the suspension improper.
                                        In reply to your second query, the opinion of the CSC is considered an
                                        executive interpretation.
                                        While it is not equivalent to a court
                                        pronouncement, nonetheless, such executive interpretation can be used as a
                                        matter of evidence before any court and may carry persuasive effect upon
                                        the court if the opinion is correct. The legal opinion, in proper cases, can
                                        also be a source of good faith on the part of the public official who acted
                                        based thereon.

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        In reply to your third query, it is equally important to note also that the
                                        Sanggunian is also vested with the inherent power of oversight functions to
                                        oversee that duly approved ordinances were efficiently, effectively and
                                        adequately executed by the Local Chief Executive. Accordingly, it should
                                        have also been the duty of the Sanggunian, pursuant to its oversight
                                        functions, to make sure that the ordinances it enacted and approved by the
                                        Municipal Mayor are properly implemented. In your case, the Sangguniang
                                        should have, on its own initiative, made the necessary corrections on the
                                        revised appropriations ordinance since in the first place, it is within the
                                        power of the Sanggunian to legislate an appropriation ordinance, whether it
                                        be annual or supplemental. The task of the Municipal Mayor is to make
                                        executive proposals to the Sangguniang Bayan for legislation purposes of the
                                        latter. Hence, simply put, if the Local Chief Executive failed on this aspect,
                                        the Sangguniang Bayan could have remedied the situation by requiring the
                                        Municipal Mayor to submit the executive proposal or requesting the
                                        department heads under the Office of the Mayor to submit the necessary
                                        adjustments as noted by the Sangguniang Panlalawigan for the Sangguniang
                                        Bayans appropiate legislation.
                                        In reply to your fourth query, it bears to note that based on your
                                        representations, it would appear that both the Local Chief Executive and the
                                        Sangguniang Bayan failed to faithfully discharge their duties relative to their
                                        oversight functions. As to what extent of liability the Mayor and the
                                        Sangguniang Bayan may have incurred, it would suffice to say that the
                                        determination of liabilities, if any, of public officials are best done by filing
                                        the appropriate administrative charges before the proper disciplining authority
                                        for adjudication.
                                        We hope to have enlightened you on the matter.
                                        Very truly yours,
                                        W NCELITO T. ANDANA
                                        Undersecreta V
                                        copy furnished:
                                        Director Rolando Rafael
                                        DILG Regional Office No. IV-B
                                        Aurora Blvd., Cubao
                                        Quezon City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-005S2006',
                    'reference' => 'LO-005S2006', // Ensure unique reference
                    'extracted_texts' => 'Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. francisco Gold Condominium II, EDSA
                                        cor. MapaUnahal St., Diliman, Quezon City
                                        OFFICE 0F SECRETARY
                                        07 February 2006
                                        MR. LEONCIO T. UY 111
                                        Sogod, Southern Leyte
                                        Dear Mr. Uy:
                                        This pertains to your letter requesting for legal opinion regarding the
                                        manner of appointing the replacement for the vacant position in the
                                        Sangguniang Bayan of Sogod, Southern Leyte.
                                        In your letter, you stated that your father was admitted as Member of the
                                        Laban ng Demokratikong Pilipino (LDP). He then ran for public office and was
                                        elected as Sangguniang Bayan Member of Sogod, Southern Leyte, in the May
                                        2004 elections. On 27 July 2004, your father died. You further stated that at
                                        the time of his death, he was still a member of good standing of the LDP patty.
                                        On 17 October 2005, your brother was nominated by the LDP Party to fill up the
                                        vacancy in the Sangguniang Bayan in accordance with Section 45 of RA 7160.
                                        You now posed the following queries:
                                        1. Whether or not the Provincial Governor, as the appointing
                                        authority, has the discretion to refuse to appoint the party
                                        nominee to the office who has all the qualifications and none of
                                        the disqualifications.
                                        2. Whether or not the Provincial Governor has the discretion to
                                        appoint a person other than the party nominee.
                                        3. What are the legal consequences and/or remedies available to
                                        the nominee in case the Provincial Governor unduly refuses to
                                        appoint the former.
                                        In reply thereto, may we invite your attention to Section 45 (a) and (b) of
                                        the Local Government Code, which provides that:
                                        "SEC. 45. Permanent Vacancy in the Sanggunian.-
                                        (a) Permanent vacancies in the sanggunian where
                                        automatic succession provided above do not apply shatt
                                        be fiZZed by appointment in the following manner:
                                        1. the President, through the Executive Secretary, in
                                        the case of the sangguniang panZaZawigan and the
                                        sangguniang pan Zungsod of highly urbanized cities
                                        and independent component cities;

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        2. the governor, in the case of the sangguniang
                                        panZungsod of component cities and the sangguniang
                                        bayan;
                                        3. the city or municipal mayor, in the case of
                                        sangguniang barangay, upon recommendation of the
                                        sangguniang barangay concerned.
                                        b) Except for the sangguniang barangay, only
                                        the nominee of the political party under which the
                                        sanggunian member concerned had been elected and
                                        whose elevation to the position next higher in rank
                                        created the Zast vacancy in the sanggunian shall be
                                        appointed in the manner hereinabove provided. The
                                        appointee shalt come from the same political party as
                                        that of the sanggunian member who caused the vacancy
                                        and shall serve the unexpired term of the vacant office.
                                        In the appointment herein mentioned, a nomination and
                                        a certificate of membership of the appointee from the
                                        highest official of the political party concerned are
                                        conditions sine qua non and any appointment without
                                        such nomination and certification shalt be nutz and
                                        void initio and shaZZ be a ground for administrative
                                        action against the official responsible therefor.
                                        In case the permanent vacancy is caused by
                                        c)
                                        a sanggunian member who does not belong to any
                                        political party, the Zocal chief executive shaZZ, upon
                                        recommendation of the sanggunian concerned, appoint
                                        a qualified person to fitt the vacancy.
                                        Applying now the foregoing provision of law vis-å-vis your narration of
                                        facts, Section 45 (b) applies when the Sangguniang Bayan Member who caused
                                        the vacancy belongs to a political party, while Section 45 (c) applies when the
                                        concerned Sangguniang Bayan Member does not belong to any political party.
                                        In this caser what is applicable is Section 45 (b). Along this line, it is clear that
                                        the last vacancy in the sanggunian was caused by your Sangguniang Bayan
                                        Member-father by reason of his untimely death. It is not, however, sufficient
                                        that your late father was a LDP Member at the time of his death. It is likewise
                                        required that he must have been elected as Sangguniang Bayan Member in the
                                        last May 2004 elections under that political patty. Hence, assuming that he ran
                                        and was elected as Sangguniang Bayan Member under the LDP party, then the
                                        political party that should make the nomination for the replacement is the LDP
                                        party. It need not be emphasized that as mandated by law, the certificate of
                                        nomination and certificate of membership of the appointee issued by the highest
                                        official of the political party concerned are conditions sine qua non and any
                                        appointment without such certificates shall be null and void ab initio and shall be
                                        a ground for administrative action against the official responsible therefor.
                                        Going now to your first query, if the nominee possesses all the
                                        qualifications and none of the disqualifications for the Sangguniang Bayan

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        position and the procedure and requirements mandated under Section 45 (b)
                                        were duly complied with, the Governor has no discretion to refuse the issuance
                                        of the appointment since it is the law itself that mandated the manner,
                                        requirements and procedure in filling up the said vacancy.
                                        On whether or not the Governor has discretion to appoint a person other
                                        than the party nominee, we answer in the negative. The Governor is bound by
                                        law to appoint only the nominee of the political patty under which the
                                        Sangguniang Bayan Member who caused the vacancy had been elected in the
                                        last elections. Hence, if the Governor issues an appointment to a person other
                                        than the patty nominee, said appointment is clearly null and void ab initio as the
                                        law requires, as conditions sine qua non, the certificate of membership and the
                                        certificate of nomination of the political party.
                                        On your last query, the law is quite clear that if the appointment to fill up
                                        a permanent vacancy in the sanggunian is made without the supporting
                                        certificates of nomination and membership issued by the highest official of the
                                        political party as required by Section 45 (b) as abovestated, the appointing
                                        authority concerned may be charged administratively. Should there be an undue
                                        and unjustifiable refusal on the part of the Governor to appoint the nominee of
                                        the political patty, then the nominee concerned may avail himself of the
                                        remedies available under the Rules of Court, such as filing of a petition for
                                        mandamus or such other relief as he may deem fit, without prejudice to the filing
                                        of both administrative and criminal cases.
                                        We hope to have guided you accordingly.
                                        Very truly yours,
                                        TERESI
                                        ASTILLO
                                        Undersecreta
                                        Legal:43/La
                                        Director William C. Paler
                                        DILG Region VIII
                                        Tacloban City

                                        ****** Result for Image/Page 1 ******
                                        Republic of the Philippines
                                        DEPARTMENT or THE INTERIOR AND LOCAL GOVERNMENT
                                        A. francisco Gold Condominium II, EDSA
                                        cor. MapaUnahal St., Diliman, Quezon City
                                        OFFICE 0F SECRETARY
                                        07 February 2006
                                        MR. LEONCIO T. UY 111
                                        Sogod, Southern Leyte
                                        Dear Mr. Uy:
                                        This pertains to your letter requesting for legal opinion regarding the
                                        manner of appointing the replacement for the vacant position in the
                                        Sangguniang Bayan of Sogod, Southern Leyte.
                                        In your letter, you stated that your father was admitted as Member of the
                                        Laban ng Demokratikong Pilipino (LDP). He then ran for public office and was
                                        elected as Sangguniang Bayan Member of Sogod, Southern Leyte, in the May
                                        2004 elections. On 27 July 2004, your father died. You further stated that at
                                        the time of his death, he was still a member of good standing of the LDP patty.
                                        On 17 October 2005, your brother was nominated by the LDP Party to fill up the
                                        vacancy in the Sangguniang Bayan in accordance with Section 45 of RA 7160.
                                        You now posed the following queries:
                                        1. Whether or not the Provincial Governor, as the appointing
                                        authority, has the discretion to refuse to appoint the party
                                        nominee to the office who has all the qualifications and none of
                                        the disqualifications.
                                        2. Whether or not the Provincial Governor has the discretion to
                                        appoint a person other than the party nominee.
                                        3. What are the legal consequences and/or remedies available to
                                        the nominee in case the Provincial Governor unduly refuses to
                                        appoint the former.
                                        In reply thereto, may we invite your attention to Section 45 (a) and (b) of
                                        the Local Government Code, which provides that:
                                        "SEC. 45. Permanent Vacancy in the Sanggunian.-
                                        (a) Permanent vacancies in the sanggunian where
                                        automatic succession provided above do not apply shatt
                                        be fiZZed by appointment in the following manner:
                                        1. the President, through the Executive Secretary, in
                                        the case of the sangguniang panZaZawigan and the
                                        sangguniang pan Zungsod of highly urbanized cities
                                        and independent component cities;

                                        ****** Result for Image/Page 2 ******
                                        -2-
                                        2. the governor, in the case of the sangguniang
                                        panZungsod of component cities and the sangguniang
                                        bayan;
                                        3. the city or municipal mayor, in the case of
                                        sangguniang barangay, upon recommendation of the
                                        sangguniang barangay concerned.
                                        b) Except for the sangguniang barangay, only
                                        the nominee of the political party under which the
                                        sanggunian member concerned had been elected and
                                        whose elevation to the position next higher in rank
                                        created the Zast vacancy in the sanggunian shall be
                                        appointed in the manner hereinabove provided. The
                                        appointee shalt come from the same political party as
                                        that of the sanggunian member who caused the vacancy
                                        and shall serve the unexpired term of the vacant office.
                                        In the appointment herein mentioned, a nomination and
                                        a certificate of membership of the appointee from the
                                        highest official of the political party concerned are
                                        conditions sine qua non and any appointment without
                                        such nomination and certification shalt be nutz and
                                        void initio and shaZZ be a ground for administrative
                                        action against the official responsible therefor.
                                        In case the permanent vacancy is caused by
                                        c)
                                        a sanggunian member who does not belong to any
                                        political party, the Zocal chief executive shaZZ, upon
                                        recommendation of the sanggunian concerned, appoint
                                        a qualified person to fitt the vacancy.
                                        Applying now the foregoing provision of law vis-å-vis your narration of
                                        facts, Section 45 (b) applies when the Sangguniang Bayan Member who caused
                                        the vacancy belongs to a political party, while Section 45 (c) applies when the
                                        concerned Sangguniang Bayan Member does not belong to any political party.
                                        In this caser what is applicable is Section 45 (b). Along this line, it is clear that
                                        the last vacancy in the sanggunian was caused by your Sangguniang Bayan
                                        Member-father by reason of his untimely death. It is not, however, sufficient
                                        that your late father was a LDP Member at the time of his death. It is likewise
                                        required that he must have been elected as Sangguniang Bayan Member in the
                                        last May 2004 elections under that political patty. Hence, assuming that he ran
                                        and was elected as Sangguniang Bayan Member under the LDP party, then the
                                        political party that should make the nomination for the replacement is the LDP
                                        party. It need not be emphasized that as mandated by law, the certificate of
                                        nomination and certificate of membership of the appointee issued by the highest
                                        official of the political party concerned are conditions sine qua non and any
                                        appointment without such certificates shall be null and void ab initio and shall be
                                        a ground for administrative action against the official responsible therefor.
                                        Going now to your first query, if the nominee possesses all the
                                        qualifications and none of the disqualifications for the Sangguniang Bayan

                                        ****** Result for Image/Page 3 ******
                                        -3-
                                        position and the procedure and requirements mandated under Section 45 (b)
                                        were duly complied with, the Governor has no discretion to refuse the issuance
                                        of the appointment since it is the law itself that mandated the manner,
                                        requirements and procedure in filling up the said vacancy.
                                        On whether or not the Governor has discretion to appoint a person other
                                        than the party nominee, we answer in the negative. The Governor is bound by
                                        law to appoint only the nominee of the political patty under which the
                                        Sangguniang Bayan Member who caused the vacancy had been elected in the
                                        last elections. Hence, if the Governor issues an appointment to a person other
                                        than the patty nominee, said appointment is clearly null and void ab initio as the
                                        law requires, as conditions sine qua non, the certificate of membership and the
                                        certificate of nomination of the political party.
                                        On your last query, the law is quite clear that if the appointment to fill up
                                        a permanent vacancy in the sanggunian is made without the supporting
                                        certificates of nomination and membership issued by the highest official of the
                                        political party as required by Section 45 (b) as abovestated, the appointing
                                        authority concerned may be charged administratively. Should there be an undue
                                        and unjustifiable refusal on the part of the Governor to appoint the nominee of
                                        the political patty, then the nominee concerned may avail himself of the
                                        remedies available under the Rules of Court, such as filing of a petition for
                                        mandamus or such other relief as he may deem fit, without prejudice to the filing
                                        of both administrative and criminal cases.
                                        We hope to have guided you accordingly.
                                        Very truly yours,
                                        TERESI
                                        ASTILLO
                                        Undersecreta
                                        Legal:43/La
                                        Director William C. Paler
                                        DILG Region VIII
                                        Tacloban City',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-007S2006',
                    'reference' => 'LO-007S2006', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-040S2006',
                    'reference' => 'LO-040S2006', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-043S2006',
                    'reference' => 'LO-043S2006', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-012S2005',
                    'reference' => 'LO-012S2005', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-029S2005',
                    'reference' => 'LO-029S2005', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-044S2005',
                    'reference' => 'LO-044S2005', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-014S2009',
                    'reference' => 'LO-014S2009', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-070S2007',
                    'reference' => 'LO-070S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-047S2007',
                    'reference' => 'LO-047S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-045S2007',
                    'reference' => 'LO-045S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-044S2007',
                    'reference' => 'LO-044S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-043S2007',
                    'reference' => 'LO-043S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-038S2008',
                    'reference' => 'LO-038S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-036S2008',
                    'reference' => 'LO-036S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-032S2008',
                    'reference' => 'LO-032S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-031S2007',
                    'reference' => 'LO-031S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-028S2008',
                    'reference' => 'LO-028S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-027S2007',
                    'reference' => 'LO-027S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-025S2008',
                    'reference' => 'LO-025S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-023S2008',
                    'reference' => 'LO-023S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-019S2008',
                    'reference' => 'LO-019S2008', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-010S2007',
                    'reference' => 'LO-010S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-023S2009',
                    'reference' => 'LO-023S2009', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-098S2007',
                    'reference' => 'LO-098S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-092S2007',
                    'reference' => 'LO-092S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-091S2007',
                    'reference' => 'LO-091S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-089S2007',
                    'reference' => 'LO-089S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-088S2007',
                    'reference' => 'LO-088S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'LO-086S2007',
                    'reference' => 'LO-086S2007', // Ensure unique reference
                    'extracted_texts' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];

            // Insert only if the reference does not already exist
            foreach ($legalOpinions as $opinion) {
                DB::table('legal_opinions')->updateOrInsert(
                    ['reference' => $opinion['reference']], // Condition to check
                    $opinion // Data to insert/update
                );
            }

            $this->command->info('Legal opinions seeded successfully.');
        } else {
            $this->command->info('No existing records found. Seeder skipped.');
        }
    }
}
