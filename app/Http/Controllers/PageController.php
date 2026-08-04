<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PageController extends Controller
{
    public function home()
    {
        $caseStudies = collect($this->portfolioProjects())->unique('category')->take(3)->values();

        return view('home', compact('caseStudies'));
    }

    public function services()
    {
        $services = [
            [
                'category' => 'support',
                'icon' => '01',
                'title' => 'Implementation & Setup',
                'description' => 'Complete deployment of your chosen system — configured to your workflows, data, and team structure.',
                'features' => ['Cloud / on-premise setup', 'Custom configuration', 'Go-live support'],
            ],
            [
                'category' => 'support',
                'icon' => '02',
                'title' => 'Data Migration',
                'description' => 'We safely migrate all your existing data from spreadsheets, legacy systems, or other software — zero data loss.',
                'features' => ['Excel / CSV import', 'Legacy system migration', 'Data cleaning & mapping'],
            ],
            [
                'category' => 'support',
                'icon' => '03',
                'title' => 'Staff Training',
                'description' => 'Hands-on training sessions for your entire team — online or on-site — so everyone is confident from day one.',
                'features' => ['Role-based training', 'Video tutorial library', 'Printed training manual'],
            ],
            [
                'category' => 'support',
                'icon' => '04',
                'title' => '24/7 Support',
                'description' => 'Dedicated support via WhatsApp, phone, and email — real humans who know your system inside out.',
                'features' => ['WhatsApp helpdesk', 'Remote desktop support', 'Priority bug fixes'],
            ],
            [
                'category' => 'support',
                'icon' => '05',
                'title' => 'Custom Development',
                'description' => 'Need a feature built specifically for your business? Our team handles custom modules, integrations, and extensions.',
                'features' => ['Custom module development', 'Third-party API integration', 'White-label options'],
            ],
            [
                'category' => 'support',
                'icon' => '06',
                'title' => 'Annual Maintenance',
                'description' => 'Regular updates, security patches, and performance optimizations — so your system keeps running at its best.',
                'features' => ['Software updates', 'Security patches', 'Performance monitoring'],
            ],
            [
                'category' => 'growth',
                'icon' => '🌐',
                'title' => 'WordPress Website Development',
                'description' => 'Custom WordPress websites built for speed, SEO, and easy content updates — from business sites to blogs and portfolios.',
                'features' => ['Custom theme design', 'Plugin & page builder setup', 'Speed & security optimization'],
            ],
            [
                'category' => 'growth',
                'icon' => '📱',
                'title' => 'Android App Development',
                'description' => 'Native Android apps built to extend your business into your customers\' pockets — from MVPs to full-scale apps.',
                'features' => ['Native Android (Kotlin/Java)', 'Play Store publishing', 'Push notifications & APIs'],
            ],
            [
                'category' => 'growth',
                'icon' => '🅻',
                'title' => 'Laravel Development',
                'description' => 'Custom Laravel applications and APIs — the same framework powering our own products, built around your business logic.',
                'features' => ['Custom web applications', 'REST & third-party APIs', 'Scalable, secure architecture'],
            ],
            [
                'category' => 'growth',
                'icon' => '🐍',
                'title' => 'Python Development',
                'description' => 'Python-based automation, data pipelines, and backend systems — from scripts that save hours to full production services.',
                'features' => ['Automation & scripting', 'Data processing & APIs', 'Django / FastAPI backends'],
            ],
            [
                'category' => 'growth',
                'icon' => '🛍️',
                'title' => 'Shopify Store Setup',
                'description' => 'Fully configured Shopify stores ready to sell — themes, payment gateways, and product catalogs set up end-to-end.',
                'features' => ['Theme customization', 'Payment gateway integration', 'Product catalog setup'],
            ],
            [
                'category' => 'growth',
                'icon' => '🛒',
                'title' => 'E-Commerce Development',
                'description' => 'Custom online stores built beyond templates — for businesses that need catalog logic, inventory, or checkout flows off-the-shelf platforms can\'t handle.',
                'features' => ['Custom storefront & checkout', 'Inventory & order management', 'Payment gateway integration'],
            ],
            [
                'category' => 'growth',
                'icon' => '📈',
                'title' => 'Digital Marketing',
                'description' => 'Paid and organic campaigns across Google, Meta, and WhatsApp — built to bring in leads, not just impressions.',
                'features' => ['Google & Meta ad campaigns', 'Content & social strategy', 'Monthly performance reports'],
            ],
            [
                'category' => 'growth',
                'icon' => '🔍',
                'title' => 'SEO (Search Engine Optimization)',
                'description' => 'On-page, technical, and local SEO to help your business get found — with transparent monthly reporting on rankings and traffic.',
                'features' => ['Keyword research & on-page SEO', 'Technical SEO audits', 'Local SEO & Google Business'],
            ],
        ];

        return view('services', ['services' => collect($services)]);
    }

    public function products()
    {
        $products = [
            [
                'name'        => 'Vidhyapro',
                'category'    => 'Education Software',
                'color_class' => 'education',
                'price'       => '₹12,999',
                'old_price'   => '₹18,999',
                'badge'       => null,
                'description' => 'A complete platform for schools, colleges, and coaching centres to manage every aspect of academic operations.',
                'features'    => [
                    'Student enrollment & profiles',
                    'Attendance tracking',
                    'Fee collection & invoicing',
                    'Exam & result management',
                    'Parent communication portal',
                    'Timetable management',
                    'Staff & payroll module',
                    'Reports & analytics',
                ],
            ],
            [
                'name'        => 'Clinic Management System',
                'category'    => 'Healthcare Software',
                'color_class' => 'health',
                'price'       => '₹9,999',
                'old_price'   => null,
                'badge'       => null,
                'description' => 'A fully integrated solution for clinics, hospitals, and diagnostic centres to streamline patient care and administration.',
                'features'    => [
                    'Patient registration & history',
                    'Appointment scheduling',
                    'Doctor & staff management',
                    'Prescription generation',
                    'Lab reports & results',
                    'Billing & insurance',
                    'Pharmacy management',
                    'Analytics dashboard',
                ],
            ],
            [
                'name'        => 'Real Estate Management System',
                'category'    => 'Property Software',
                'color_class' => 'realestate',
                'price'       => '₹14,999',
                'old_price'   => '₹20,999',
                'badge'       => null,
                'description' => 'A powerful CRM for property dealers, builders, and brokers to manage listings, leads, and close deals faster.',
                'features'    => [
                    'Property listings & search',
                    'Lead capture & CRM',
                    'Deal pipeline management',
                    'Commission calculation',
                    'Document management',
                    'Client portal',
                    'Follow-up reminders',
                    'Sales reports & insights',
                ],
            ],
            [
                'name'        => 'WhatsApp Marketing System',
                'category'    => 'Marketing Software',
                'color_class' => 'whatsapp',
                'price'       => '₹7,999',
                'old_price'   => null,
                'badge'       => 'Most Popular',
                'description' => 'Send targeted WhatsApp campaigns at scale — with smart segmentation, templates, and real-time analytics.',
                'features'    => [
                    'Bulk message broadcasting',
                    'Contact list management',
                    'Campaign scheduling',
                    'Message template library',
                    'Delivery & read analytics',
                    'Auto-reply bots',
                    'Team inbox management',
                    'Campaign ROI reports',
                ],
            ],
        ];

        return view('products', compact('products'));
    }

    public function portfolio()
    {
        return view('portfolio', ['projects' => $this->portfolioProjects()]);
    }

    private function portfolioProjects(): array
    {
        return [
            [
                'category' => 'edu',
                'icon'     => '🎓',
                'badge'    => 'Education',
                'client'   => 'Bright Future Academy',
                'title'    => 'Digitising Admissions & Fee Collection for a 1,200-Student Coaching Chain',
                'description' => 'Bright Future Academy ran admissions, attendance, and fees across paper registers and spreadsheets. We deployed the Classes Management System across their 3 branches with a unified student database and online fee payments.',
                'results'  => [
                    ['num' => '70%', 'label' => 'Faster Admissions'],
                    ['num' => '40%', 'label' => 'Faster Fee Collection'],
                    ['num' => '3', 'label' => 'Branches Unified'],
                ],
                'tags' => ['Classes Management System', 'Fee Automation', 'Multi-branch'],
            ],
            [
                'category' => 'edu',
                'icon'     => '🎓',
                'badge'    => 'Education',
                'client'   => 'Horizon Public School',
                'title'    => 'Replacing WhatsApp Groups With a Real Parent Communication Portal',
                'description' => 'Teachers were sending report cards and circulars over 40+ WhatsApp groups. We rolled out the parent portal module so attendance, results, and notices reach every parent automatically.',
                'results'  => [
                    ['num' => '2,000+', 'label' => 'Parents Onboarded'],
                    ['num' => '90%', 'label' => 'Notice Read Rate'],
                    ['num' => '6 wks', 'label' => 'Rollout Time'],
                ],
                'tags' => ['Classes Management System', 'Parent Portal', 'Notifications'],
            ],
            [
                'category' => 'health',
                'icon'     => '🏥',
                'badge'    => 'Healthcare',
                'client'   => 'Mehta Multispeciality Clinic',
                'title'    => 'Moving 15 Years of Paper Patient Records Onto One Platform',
                'description' => 'Patient history was scattered across physical files, making follow-ups slow and error-prone. We migrated their records into the Clinic Management System with zero data loss and trained the full front-desk and doctor staff.',
                'results'  => [
                    ['num' => '18,000+', 'label' => 'Records Migrated'],
                    ['num' => '0', 'label' => 'Data Loss'],
                    ['num' => '5 days', 'label' => 'Staff Training'],
                ],
                'tags' => ['Clinic Management System', 'Data Migration', 'Staff Training'],
            ],
            [
                'category' => 'health',
                'icon'     => '🏥',
                'badge'    => 'Healthcare',
                'client'   => 'CarePlus Diagnostics',
                'title'    => 'Automating Lab Reports and Billing for a Diagnostics Centre',
                'description' => 'Manual report typing and billing errors were slowing down patient turnaround. We integrated lab result templates and automated billing, cutting report delivery time significantly.',
                'results'  => [
                    ['num' => '55%', 'label' => 'Faster Reports'],
                    ['num' => '99.9%', 'label' => 'Billing Accuracy'],
                    ['num' => '24/7', 'label' => 'System Uptime'],
                ],
                'tags' => ['Clinic Management System', 'Billing', 'Lab Reports'],
            ],
            [
                'category' => 'realty',
                'icon'     => '🏢',
                'badge'    => 'Real Estate',
                'client'   => 'Patel Real Estate Group',
                'title'    => 'Building a Single Sales Pipeline Across 12 Brokers',
                'description' => 'Leads were tracked in personal notebooks and chat apps, with no visibility for management. We implemented the Real Estate Management System with a shared CRM pipeline, commission tracking, and follow-up reminders.',
                'results'  => [
                    ['num' => '35%', 'label' => 'More Deals Closed'],
                    ['num' => '12', 'label' => 'Brokers Onboarded'],
                    ['num' => '100%', 'label' => 'Lead Visibility'],
                ],
                'tags' => ['Real Estate Management System', 'CRM', 'Commission Tracking'],
            ],
            [
                'category' => 'wa',
                'icon'     => '💬',
                'badge'    => 'Marketing',
                'client'   => 'Sunrise Retail Chain',
                'title'    => 'Scaling Festive Campaigns to 5,000+ Customers on WhatsApp',
                'description' => 'Sunrise Retail wanted to run targeted festive offers without spamming customers. We set up segmented broadcast lists, template campaigns, and an auto-reply bot for order queries.',
                'results'  => [
                    ['num' => '5,000+', 'label' => 'Customers Reached'],
                    ['num' => '38%', 'label' => 'Response Rate'],
                    ['num' => '4.2x', 'label' => 'Campaign ROI'],
                ],
                'tags' => ['WhatsApp Marketing System', 'Segmentation', 'Auto-reply Bots'],
            ],
        ];
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog', ['posts' => $this->blogPosts()]);
    }

    public function blogShow(string $slug)
    {
        $post = collect($this->blogPosts())->firstWhere('slug', $slug);

        abort_if(! $post, 404);

        $related = collect($this->blogPosts())
            ->where('slug', '!=', $slug)
            ->where('category', $post['category'])
            ->take(2)
            ->values();

        return view('blog-show', compact('post', 'related'));
    }

    public function careers()
    {
        $values = [
            [
                'icon'  => '🎯',
                'title' => 'Ownership',
                'desc'  => 'Everyone here owns outcomes, not just tasks. If you spot a problem, you have the room to fix it.',
            ],
            [
                'icon'  => '🚀',
                'title' => 'Ship Fast, Learn Faster',
                'desc'  => 'We release in small, frequent updates and listen closely to what our 500+ customers tell us.',
            ],
            [
                'icon'  => '🤝',
                'title' => 'Customer Obsessed',
                'desc'  => 'Support isn\'t a separate team\'s job — everyone talks to real customers and feels their pain points.',
            ],
        ];

        $perks = [
            ['icon' => '💰', 'title' => 'Competitive Pay', 'desc' => 'Salary that matches your skill, reviewed every year — not once and forgotten.'],
            ['icon' => '🏡', 'title' => 'Remote Friendly', 'desc' => 'Several roles are fully remote, with flexible working hours around core team hours.'],
            ['icon' => '📚', 'title' => 'Learning Budget', 'desc' => 'Courses, books, and conference passes covered when they help you grow.'],
            ['icon' => '🩺', 'title' => 'Health Cover', 'desc' => 'Health insurance for you and your immediate family from day one.'],
            ['icon' => '🏖️', 'title' => 'Paid Time Off', 'desc' => 'Generous leave policy, plus all major national holidays off.'],
            ['icon' => '📈', 'title' => 'Real Growth Path', 'desc' => 'We\'re a small team — your impact and career growth compound fast here.'],
        ];

        $openings = [
            [
                'title'      => 'Full Stack Developer (Laravel / PHP)',
                'department' => 'Engineering',
                'location'   => 'mumbai',
                'type'       => 'Full-time',
            ],
      
            [
                'title'      => 'UI/UX Designer',
                'department' => 'Design',
                'location'   => 'mumbai',
                'type'       => 'Contract',
            ],
        ];

        return view('careers', compact('values', 'perks', 'openings'));
    }

    private function blogPosts(): array
    {
        return [
            [
                'slug'      => '5-signs-your-school-still-runs-on-paper',
                'category'  => 'Education',
                'icon'      => '🎓',
                'title'     => '5 Signs Your School Still Runs on Paper (And What to Do About It)',
                'excerpt'   => 'From attendance registers to fee receipts — here are the everyday warning signs that your school is losing hours to manual processes, and how other institutes fixed it.',
                'author'    => 'ksteps Tech Team',
                'date'      => '2026-06-12',
                'read_time' => '4 min read',
                'tags'      => ['Education', 'Classes Management', 'Productivity'],
                'body'      => [
                    ['type' => 'p', 'text' => 'Most schools and coaching centres don\'t decide to go paperless overnight — they get pushed into it after one too many lost registers or delayed fee reconciliations. Here are five signs it\'s already time.'],
                    ['type' => 'h2', 'text' => '1. Attendance takes longer to compile than to take'],
                    ['type' => 'p', 'text' => 'If your staff spends more time copying attendance from a register into a spreadsheet at month-end than actually marking it in class, that\'s a sign the process is backwards. Digital attendance should be a byproduct of taking it once — not a second job.'],
                    ['type' => 'h2', 'text' => '2. Fee follow-ups happen from memory'],
                    ['type' => 'p', 'text' => 'When "who hasn\'t paid this month" is a question only your accountant can answer — and only after digging through a register — you\'re carrying risk you don\'t need to. Automated due-date reminders alone typically recover a meaningful chunk of delayed fees.'],
                    ['type' => 'h2', 'text' => '3. Parent updates go out over personal WhatsApp'],
                    ['type' => 'p', 'text' => 'It\'s convenient until a teacher changes their number, a message gets buried in a 200-message group, or a parent asks "did you send that circular?" A dedicated communication channel solves all three at once.'],
                    ['type' => 'h2', 'text' => '4. Exam results are typed into Excel by hand'],
                    ['type' => 'p', 'text' => 'Manual entry is where transcription errors creep in — a swapped digit on a report card is a parent phone call waiting to happen. Systems that generate report cards directly from entered marks remove that risk entirely.'],
                    ['type' => 'h2', 'text' => '5. You can\'t answer "how are we doing" without a week of digging'],
                    ['type' => 'p', 'text' => 'Enrollment trends, fee collection rate, attendance patterns — if producing these numbers takes days rather than a dashboard click, decisions get made on gut feel instead of data.'],
                    ['type' => 'p', 'text' => 'None of this requires ripping up how your school works. A good rollout digitises one workflow at a time — usually starting with attendance and fees — and expands from there. That\'s exactly how we onboarded Bright Future Academy across three branches in under six weeks.'],
                ],
            ],
            [
                'slug'      => 'digitising-patient-records-small-clinics-india',
                'category'  => 'Healthcare',
                'icon'      => '🏥',
                'title'     => 'How Digital Records Are Transforming Small Clinics in India',
                'excerpt'   => 'Patient files on paper feel manageable — until a chart goes missing during a follow-up. Here\'s what actually changes when a small clinic goes digital.',
                'author'    => 'ksteps Tech Team',
                'date'      => '2026-05-28',
                'read_time' => '5 min read',
                'tags'      => ['Healthcare', 'Clinic Management', 'Digitisation'],
                'body'      => [
                    ['type' => 'p', 'text' => 'Independent clinics and small nursing homes are often the last to digitise — not because the benefit isn\'t clear, but because the switch feels risky when you\'re handling live patient care. Having migrated over a dozen clinics onto digital records, here\'s what we\'ve consistently seen change.'],
                    ['type' => 'h2', 'text' => 'Follow-up visits get faster, not slower'],
                    ['type' => 'p', 'text' => 'The biggest fear clinics have is that digital records will slow doctors down during consultations. In practice, the opposite happens after the first few weeks — pulling up a patient\'s full history takes seconds instead of someone walking to a filing cabinet.'],
                    ['type' => 'h2', 'text' => 'Prescriptions become legible and searchable'],
                    ['type' => 'p', 'text' => 'Handwritten prescriptions are a known source of pharmacy errors. Digital prescription generation removes the ambiguity, and past prescriptions become searchable — useful when a patient can\'t remember what they were given three visits ago.'],
                    ['type' => 'h2', 'text' => 'Billing and insurance claims stop being a separate project'],
                    ['type' => 'p', 'text' => 'When billing is tied directly to the visit and treatment record, generating an insurance claim or GST-compliant invoice stops being a manual reconciliation exercise done at month-end.'],
                    ['type' => 'ul', 'items' => [
                        'No more re-typing patient details across register, prescription pad, and billing book',
                        'Lab results attach directly to the patient file instead of a loose printout',
                        'Appointment no-shows drop once automated reminders go out',
                    ]],
                    ['type' => 'h2', 'text' => 'The migration is the scary part — and it\'s the one we own'],
                    ['type' => 'p', 'text' => 'Every clinic we\'ve worked with has the same question first: "what happens to our existing files?" We migrate historical records as part of setup, so nothing gets lost and nothing has to be re-entered by hand. Mehta Multispeciality Clinic moved 15 years of records over with zero data loss — the same process we run for every clinic we onboard.'],
                ],
            ],
            [
                'slug'      => 'whatsapp-marketing-what-actually-works-2026',
                'category'  => 'Marketing',
                'icon'      => '💬',
                'title'     => 'WhatsApp Marketing in 2026: What Actually Works',
                'excerpt'   => 'Broadcast lists alone don\'t move the needle anymore. Here\'s what\'s actually driving response rates for businesses running WhatsApp campaigns this year.',
                'author'    => 'ksteps Tech Team',
                'date'      => '2026-07-15',
                'read_time' => '4 min read',
                'tags'      => ['Marketing', 'WhatsApp', 'Campaigns'],
                'body'      => [
                    ['type' => 'p', 'text' => 'WhatsApp remains the highest-engagement channel available to Indian businesses — open rates routinely beat email and SMS by a wide margin. But customers have also gotten better at tuning out generic blasts. Here\'s what\'s actually working for the businesses running campaigns through our platform.'],
                    ['type' => 'h2', 'text' => 'Segmentation beats volume'],
                    ['type' => 'p', 'text' => 'Sending the same offer to your entire contact list is the fastest way to get blocked. Segmenting by purchase history, location, or engagement level consistently outperforms broad blasts — even at a fraction of the recipient count.'],
                    ['type' => 'h2', 'text' => 'Templates need to read like a message, not an ad'],
                    ['type' => 'p', 'text' => 'The campaigns with the best response rates are short, personalised, and give the recipient a clear single action — not a wall of product images. "Hi Raj, your favourite kurta is back in stock" outperforms a five-image catalogue every time.'],
                    ['type' => 'h2', 'text' => 'Auto-reply bots handle the predictable questions'],
                    ['type' => 'p', 'text' => 'Order status, store timings, and return policy make up the bulk of inbound replies after a campaign. Automating just those frees up your team to handle the conversations that actually need a human — usually the ones closest to a sale.'],
                    ['type' => 'h2', 'text' => 'Timing and frequency matter more than creative'],
                    ['type' => 'p', 'text' => 'Businesses that cap campaigns to festive periods and genuine restocks see far better long-term response rates than those messaging weekly. Respecting the channel keeps it effective.'],
                    ['type' => 'p', 'text' => 'Sunrise Retail Chain applied exactly this approach for their festive campaigns — segmented lists, short templates, and an auto-reply bot for order queries — and saw a 38% response rate against a list of 5,000+ customers.'],
                ],
            ],
            [
                'slug'      => 'choosing-a-real-estate-crm-7-questions',
                'category'  => 'Real Estate',
                'icon'      => '🏢',
                'title'     => 'Choosing a Real Estate CRM: 7 Questions to Ask Before You Buy',
                'excerpt'   => 'Not every CRM is built for how Indian real estate teams actually work. Here\'s a practical checklist before you commit to one.',
                'author'    => 'ksteps Tech Team',
                'date'      => '2026-04-30',
                'read_time' => '5 min read',
                'tags'      => ['Real Estate', 'CRM', 'Buying Guide'],
                'body'      => [
                    ['type' => 'p', 'text' => 'Most CRMs on the market are built for software sales teams, not property brokers juggling site visits, commission splits, and long negotiation cycles. Before you sign up for one, run it through these seven questions.'],
                    ['type' => 'h2', 'text' => '1. Does it handle commission splits across multiple brokers?'],
                    ['type' => 'p', 'text' => 'If a deal involves two brokers and a referral fee, can the system calculate and track that automatically — or will your accountant still be doing it on a spreadsheet?'],
                    ['type' => 'h2', 'text' => '2. Can leads be assigned and reassigned without losing history?'],
                    ['type' => 'p', 'text' => 'Leads change hands often in real estate. A good CRM keeps the full interaction history intact when a lead moves from one broker to another, so nothing gets repeated or missed.'],
                    ['type' => 'h2', 'text' => '3. Does it remind brokers to follow up, or rely on them remembering?'],
                    ['type' => 'p', 'text' => 'Deals are won and lost on follow-up timing. Automated reminders tied to each lead\'s stage in the pipeline matter more than almost any other feature.'],
                    ['type' => 'h2', 'text' => '4. Can management see the pipeline without asking for updates?'],
                    ['type' => 'p', 'text' => 'If a sales manager still has to ask "where are we on the Sharma property" in a meeting, the CRM isn\'t doing its job. Live pipeline visibility should be the default, not a report someone compiles.'],
                    ['type' => 'h2', 'text' => '5. Does it manage documents per property and per deal?'],
                    ['type' => 'p', 'text' => 'Title deeds, NOCs, and agreements need to be attached to the right property and the right deal — not floating in a shared drive folder.'],
                    ['type' => 'h2', 'text' => '6. Is there a client-facing portal, or is everything internal-only?'],
                    ['type' => 'p', 'text' => 'Clients increasingly expect to check status themselves rather than calling for updates. A basic client portal reduces that call volume significantly.'],
                    ['type' => 'h2', 'text' => '7. What happens to your data if you switch systems later?'],
                    ['type' => 'p', 'text' => 'Always ask about export options before you commit — not after. Being able to leave cleanly is part of what makes a vendor trustworthy to join in the first place.'],
                    ['type' => 'p', 'text' => 'These were exactly the gaps Patel Real Estate Group ran into with spreadsheets and personal notebooks before centralising 12 brokers onto one pipeline — a 35% lift in closed deals came largely from follow-up reminders and visibility alone.'],
                ],
            ],
        ];
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:160',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(config('mail.from.address'))->send(
            new ContactMessage(
                senderName:     $validated['name'],
                senderEmail:    $validated['email'],
                messageSubject: $validated['subject'],
                messageBody:    $validated['message'],
            )
        );

        return redirect()->route('contact')->with('success', 'Thanks, ' . $validated['name'] . '! Your message has been sent — we\'ll reply within a few hours.');
    }
}
