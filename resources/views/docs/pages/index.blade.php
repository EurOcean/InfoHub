@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-4">
                    <h2 class="text-xl text-primary-blue">EurOcean's Ocean Infohub API</h2>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    <div class="space-y-4 taxt-gray-800">
                        <p>
                            The Ocean InfoHub (OIH) project aims to improve access to global oceans information, data and knowledge products for management and sustainable development. OIH will link and anchor a network of regional and thematic nodes that will improve online access to and synthesis of existing global, regional and national data, information and knowledge resources, including existing clearinghouse mechanisms. The project will not be establishing a new database but will be supporting discovery and interoperability of existing information systems.
                        </p>
                        <p>
                            OIH will support the development of the Ocean Data and Information System (ODIS) architecture, which will provide an interoperability layer and supporting technology to allow existing and emerging ocean data and information systems, from any stakeholder, to interoperate with one another. This will enable and accelerate more effective development and dissemination of digital technology and sharing of ocean data, information, and knowledge. As such, ODIS will not be a new portal or centralized system but will provide a collaborative solution to interlink distributed systems for common goals. Together with global project partners and partners in the three regions, a process of co-design will enable a number of global and regional nodes to test the proof of concept for the ODIS.
                        </p>
                        <p>
                            EurOcean, one of OIH partners, is an international, independent, non-profit, scientific organization, founded in 2002, by the Portuguese Foundation for Science and Technology (FCT) and the French National Institute for Ocean Science (Ifremer). As the European broker for Ocean Science and Technology, EurOcean supports the advances in these two areas by fostering information exchange, interaction and innovation among its members, the ocean community and society.
                        </p>
                        <p>
                            The development and management of comprehensive information on ocean science and technology is one of EurOcean´s core activities. Since 2006, EurOcean has developed the Research Infrastructures Database (RID). RID comprises relevant information (i.a. technical characteristics, contacts of operators) on European marine research infrastructures. RID has, presently, information more than 1000 infrastructures, grouped into 15 categories, from over 35 countries.
                        </p>
                        <p>
                            RID is used to support policymaking, research projects and funding initiatives. In 2019, RID supported the development of the European Marine Board (EMB) Position Paper #25 - Next Generation European Research Vessels: Current Status and Foreseeable Evolution. In 2020, RID supported the development of EMB’s Policy Brief #7 - Next Generation European Research Vessels. Still in 2020, RID started providing information to the European Atlas of the Seas. In 2021, RID was used to provide statistical information to the European Commission. 
                        </p>
                        <p>
                            Another database developed by EurOcean is the Marine Knowledge Gate (KG). KG is an innovative online repository of marine research projects and results developed with funding from the European Union and major national Research Funding and Performing Organisations (RFPOs) from 25 European coastal countries, as well as from Regional and International Agencies. KG is also used to support policymaking, research projects and funding initiatives in Europe.
                        </p>
                        <p>
                            As part of the ODIS mission, IOC-UNESCO is willing to facilitate the release of RID and KG data available through the Ocean InfoHub project and is now able to do so with the support from EurOcean.
                        </p>
                        <p>
                            Currently integrated into ODIS, RID and KG are making available metadata records about research vessels and projects to users and other ODIS nodes (which may be humans or software systems). Aggregators leveraging the ODIS Architecture are now able to merge these data with data from other systems (e.g. POGO, ODIDO) as necessary, and return the results to its users.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
