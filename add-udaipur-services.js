const fs = require('fs');
const path = require('path');

const targetProjectDir = 'C:/Users/kushs/OneDrive/Documents/Web Development/Chittortech-Website';
const cityServicesPath = path.join(targetProjectDir, 'src/data/cityServices.json');
const chittorgarhServicesPath = path.join(targetProjectDir, 'src/data/chittorgarhServices.json');

const cityServices = JSON.parse(fs.readFileSync(cityServicesPath, 'utf8'));

// Take Ajmer services as base
const ajmerKeys = Object.keys(cityServices).filter(k => k.endsWith('-in-ajmer'));

const ajmerProfile = "Ajmer's premier educational institutions, heritage hospitality, and bustling retail corridors";
const udaipurProfile = "Udaipur's luxury palace resorts, destination wedding venues, marble and mineral processing plants, and vibrant commerce";

const udaipurEntries = {};

ajmerKeys.forEach(k => {
  const base = cityServices[k];
  let jsonStr = JSON.stringify(base);
  
  // Replace profile and city names
  jsonStr = jsonStr.replaceAll(ajmerProfile, udaipurProfile);
  jsonStr = jsonStr.replaceAll('Ajmer', 'Udaipur');
  jsonStr = jsonStr.replaceAll('ajmer', 'udaipur');
  
  const obj = JSON.parse(jsonStr);
  
  // Custom touches for Udaipur special industries
  if (obj.slug === 'hotel-management-system-in-udaipur') {
    obj.badge = 'Premier Luxury Hotel, Heritage Resort & Wedding Venue ERP in Udaipur';
    obj.heading = 'Best Hotel & Resort Management Software in Udaipur';
    obj.intro = 'Udaipur is world-famous as the City of Lakes and India\'s premier destination wedding hub. Luxury palace hotels, boutique heritage havelis, and lakeside resorts in Udaipur require seamless guest check-ins, automated OTA synchronization (MakeMyTrip, Booking.com, Agoda), banquet billing, and restaurant KOT management. ChittorTech Hotel ERP handles it all.';
  } else if (obj.slug === 'marble-granite-industry-erp-in-udaipur') {
    obj.badge = 'Tailored Green Marble, Granite & Mineral Processing ERP in Udaipur';
    obj.heading = 'Best Marble & Granite Industry ERP Software in Udaipur';
    obj.intro = 'From Sukher and Goverdhan Vilas to RIICO industrial zones, Udaipur is a global capital for green marble and granite processing. Standard retail software cannot handle block-to-slab conversion, gangsaw slicing wastage, or sq. ft. vs tons measurement. ChittorTech Stone & Marble ERP is engineered specifically for stone processors, quarry owners, and traders in Udaipur.';
  }
  
  udaipurEntries[obj.slug] = obj;
  cityServices[obj.slug] = obj;
});

// Save updated cityServices.json
fs.writeFileSync(cityServicesPath, JSON.stringify(cityServices, null, 2), 'utf8');

// Save updated chittorgarhServices.json as well
fs.writeFileSync(chittorgarhServicesPath, JSON.stringify(cityServices, null, 2), 'utf8');

console.log(`Successfully added ${Object.keys(udaipurEntries).length} Udaipur service pages to cityServices.json and chittorgarhServices.json!`);

// Print the list of 22 Udaipur URLs
const udaipurUrls = [
  'https://chittortech.in/cities/udaipur',
  ...Object.keys(udaipurEntries).map(slug => `https://chittortech.in/${slug}`)
];

fs.writeFileSync(path.join(__dirname, 'udaipur_all_pages.txt'), udaipurUrls.join('\n'), 'utf8');
console.log(`Saved ${udaipurUrls.length} total Udaipur URLs to udaipur_all_pages.txt.`);
