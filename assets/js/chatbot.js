// Digify AI Assistant (Kaira) - Immediate initialization for 1-click response
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeDigifyChatbot);
} else {
  initializeDigifyChatbot();
}


function initializeDigifyChatbot() {
  const fab = document.getElementById('chatbot-fab');
  const windowEl = document.getElementById('chatbot-window');
  const overlay = document.getElementById('chatbot-overlay');
  const closeBtn = document.getElementById('chatbot-close-btn');
  const resetBtn = document.getElementById('chatbot-reset-btn');
  const input = document.getElementById('chatbot-input');
  const sendBtn = document.getElementById('chatbot-send-btn');
  const messagesContainer = document.getElementById('chatbot-messages');
  const suggestionsContainer = document.getElementById('chatbot-suggestions');

  // Pre-chat Reg elements
  const regContainer = document.getElementById('chatbot-reg-container');
  const mainView = document.getElementById('chatbot-main-view');
  const regForm = document.getElementById('chatbot-reg-form');
  const regNameInput = document.getElementById('chatbot-reg-name');
  const regCountrySelect = document.getElementById('chatbot-reg-country');
  const regPhoneInput = document.getElementById('chatbot-reg-phone');
  const regError = document.getElementById('chatbot-reg-error');

  // Scheduler elements
  const scheduleBtn = document.getElementById('chat-schedule-btn');
  const whatsappBtn = document.getElementById('chat-whatsapp-btn');
  const schedulerCard = document.getElementById('chatbot-scheduler-card');
  const schedulerCloseBtn = document.getElementById('scheduler-close-btn');
  const schedulerForm = document.getElementById('scheduler-form');
  const schedulerService = document.getElementById('scheduler-service');
  const schedulerDateInput = document.getElementById('scheduler-date-input');
  const schedulerNotes = document.getElementById('scheduler-notes');
  const schedulerSubmitBtn = document.getElementById('scheduler-submit-btn');
  const dateChipsContainer = document.getElementById('scheduler-date-chips');
  const slotGridContainer = document.getElementById('scheduler-slot-grid');
  const selectedTagText = document.getElementById('scheduler-selected-tag-text');

  let isOpen = false;
  let isLoading = false;
  let messages = [];
  let userInfo = { name: '', phone: '' };

  const pathname = window.location.pathname;

  // Page-aware details helper
  function getPageAwareDetails(path, name = '') {
    const greetingName = name ? ` ${name}` : '';
    const lowPath = path.toLowerCase();

    if (lowPath.includes('android') || lowPath.includes('ios') || lowPath.includes('app')) {
      return {
        greeting: `Hello${greetingName}! 👋 I see you are visiting our Android & iOS App Development page. Are you interested in building a custom high-performance mobile app for your business?`,
        suggestions: ["Mobile App Development Cost", "Android & iOS Tech Stack", "App Maintenance & Support", "Talk to Gautam"]
      };
    }
    if (lowPath.includes('web') || lowPath.includes('responsive') || lowPath.includes('e-commerce')) {
      return {
        greeting: `Hello${greetingName}! 🌐 Exploring Digify Web Development Services? We build fast, responsive, high-converting websites tailored to your industry.`,
        suggestions: ["Website Development Cost", "E-Commerce Web Solutions", "Custom Web Development", "Talk to Gautam"]
      };
    }
    if (lowPath.includes('seo') || lowPath.includes('marketing') || lowPath.includes('social-media')) {
      return {
        greeting: `Hello${greetingName}! 📈 Looking to boost your Google rankings and generate high-quality organic business leads with Digify SEO & Growth Services?`,
        suggestions: ["Free SEO Growth Audit", "On-Page & Technical SEO", "Lead Generation Strategy", "Talk to Gautam"]
      };
    }
    if (lowPath.includes('pos')) {
      return {
        greeting: `Hello${greetingName}! 🛒 Exploring Digify Smart POS? I can help you with high-speed barcode billing, offline billing mode, and dual-display setups.`,
        suggestions: ["Smart POS Live Demo", "Hardware Compatibility", "Offline Billing Mode", "POS Pricing"]
      };
    }
    if (lowPath.includes('erp') || lowPath.includes('manufacturing')) {
      return {
        greeting: `Welcome${greetingName}! 🏭 Interested in Digify Cloud ERP? Unify your factory floor, inventory, purchasing, and production orders in real time.`,
        suggestions: ["Manufacturing ERP Demo", "Production Order Tracker", "Multi-Warehouse ERP", "Get Custom Quote"]
      };
    }
    if (lowPath.includes('accounting') || lowPath.includes('invoicing') || lowPath.includes('payroll')) {
      return {
        greeting: `Hello${greetingName}! 🧾 Need seamless GST filing, E-Invoicing, Tally sync, or Saudi ZATCA VAT automation?`,
        suggestions: ["E-Invoicing Automation", "Tally Data Integration", "GST Return Filing", "Accounting Pricing"]
      };
    }
    if (lowPath.includes('crm') || lowPath.includes('lead')) {
      return {
        greeting: `Hello${greetingName}! 📊 Looking to automate lead pipelines, WhatsApp follow-ups, and sales team tracking?`,
        suggestions: ["WhatsApp Lead Automation", "Sales Pipeline Demo", "Automated Quotations", "Talk to Gautam"]
      };
    }
    if (lowPath.includes('restaurant')) {
      return {
        greeting: `Hello${greetingName}! 🍔 Looking for Restaurant POS, KOT Kitchen Display, or Table Management software?`,
        suggestions: ["Restaurant POS & KOT", "Table & Menu Management", "Swiggy/Zomato Integration", "Book Live Demo"]
      };
    }
    if (lowPath.includes('garment') || lowPath.includes('boutique') || lowPath.includes('readymade') || lowPath.includes('footwear')) {
      return {
        greeting: `Hello${greetingName}! 👗 Exploring Digify Garments & Apparel ERP? Manage size/color matrices, barcode tags, and store sales seamlessly.`,
        suggestions: ["Garment ERP Live Demo", "Barcode Tagging System", "Store Inventory Sync", "Pricing Details"]
      };
    }
    if (lowPath.includes('country') || lowPath.includes('city') || lowPath.includes('saudi') || lowPath.includes('uae')) {
      return {
        greeting: `Welcome${greetingName}! 🌐 Exploring Digify Multi-Region Cloud ERP & POS solutions tailored for international tax compliance?`,
        suggestions: ["Multi-Tax Compliance", "Global ERP Modules", "ZATCA / GST VAT Ready", "Schedule Consultation"]
      };
    }

    // Default Greeting
    return {
      greeting: `Hello${greetingName}! I'm Kaira, Digify Soft Solutions' official AI Assistant. How can I assist your business operations today?`,
      suggestions: [
        "What is Digify ERP?",
        "Explore Smart POS",
        "E-Invoicing & Accounting",
        "Talk to Gautam"
      ]
    };
  }

  // Time Formatter
  function formatTime(dateObj) {
    const d = dateObj ? new Date(dateObj) : new Date();
    let hours = d.getHours();
    let minutes = d.getMinutes();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    return hours + ':' + minutes + ' ' + ampm;
  }

  // Markdown Parser
  function parseMarkdown(text) {
    if (!text) return '';
    let content = text;

    // Code blocks
    content = content.replace(/```([\s\S]*?)```/g, (match, code) => {
      const escaped = code.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
      return `<pre><code>${escaped.trim()}</code></pre>`;
    });

    // Inline code
    content = content.replace(/`([^`]+)`/g, "<code>$1</code>");

    // Bold
    content = content.replace(/\*\*([^*]+)\*\*/g, "<strong>$1</strong>");

    // Links
    content = content.replace(
      /\[([^\]]+)\]\((https?:\/\/[^\s)]+)\)/g,
      '<a href="$2" target="_blank" rel="noopener noreferrer" class="chat-markdown-link">$1 <i class="fas fa-external-link-alt" style="font-size: 0.72em; margin-left: 2px;"></i></a>'
    );

    // Action Triggers
    content = content.replace(
      /\[ACTION:CONTACT\]/g,
      '<div class="chat-action-wrapper"><a href="contact-us.php" class="message-action-btn"><i class="fas fa-envelope"></i> Contact Support</a></div>'
    );
    content = content.replace(
      /\[ACTION:DEMO\]/g,
      '<div class="chat-action-wrapper"><a href="#" data-bs-toggle="modal" data-bs-target="#trialModal" class="message-action-btn"><i class="fas fa-laptop"></i> Request Free Demo</a></div>'
    );
    content = content.replace(
      /\[ACTION:SCHEDULE\]/g,
      '<div class="chat-action-wrapper"><a href="contact-us.php" class="message-action-btn"><i class="fas fa-calendar-check"></i> Book Strategy Meeting</a></div>'
    );
    content = content.replace(
      /\[ACTION:WHATSAPP\]/g,
      '<div class="chat-action-wrapper"><a href="https://wa.me/917425016636?text=Namaste%20Gautam%20Sir!%20I%20want%20to%20discuss%20a%20project%20with%20Digify." target="_blank" rel="noopener noreferrer" class="message-action-btn wa-btn"><i class="fab fa-whatsapp"></i> Chat with Gautam</a></div>'
    );

    // Auto-link Emails
    content = content.replace(
      /\b([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})\b/g,
      (match, email, offset, fullStr) => {
        const before = fullStr.slice(Math.max(0, offset - 15), offset);
        if (before.includes('href="') || before.includes('mailto:')) return match;
        return `<a href="mailto:${email}" class="chat-email-badge"><i class="fas fa-envelope"></i><span>${email}</span></a>`;
      }
    );

    // Lines & bullets
    const lines = content.split("\n");
    const output = [];
    let inList = false;

    for (let i = 0; i < lines.length; i++) {
      const rawLine = lines[i];
      const trimmed = rawLine.trim();

      if (trimmed.includes('class="chat-action-wrapper"') || trimmed.startsWith("<pre")) {
        if (inList) { output.push("</ul>"); inList = false; }
        output.push(trimmed);
        continue;
      }

      const bulletMatch = trimmed.match(/^[-*•]\s+(.*)$/);
      if (bulletMatch) {
        if (!inList) { output.push('<ul class="chat-bullet-list">'); inList = true; }
        output.push(`<li>${bulletMatch[1]}</li>`);
      } else {
        if (inList) { output.push("</ul>"); inList = false; }
        if (trimmed === "") {
          output.push('<div class="chat-gap"></div>');
        } else {
          output.push(`<p class="chat-line">${trimmed}</p>`);
        }
      }
    }
    if (inList) output.push("</ul>");
    return output.join("");
  }

  // Check Registration Status - Direct Instant Chat Enabled via Welcome Screen
  const savedUserInfo = localStorage.getItem("digify_user_info");
  let isRegistered = false;

  if (savedUserInfo) {
    try {
      const parsed = JSON.parse(savedUserInfo);
      if (parsed.name && parsed.phone) {
        userInfo = parsed;
        isRegistered = true;
      }
    } catch (e) { console.error(e); }
  }

  // Load Saved Chat Messages
  const savedMessages = localStorage.getItem("digify_chat_history");
  if (savedMessages) {
    try {
      const parsed = JSON.parse(savedMessages);
      if (Array.isArray(parsed) && parsed.length > 0) {
        messages = parsed;
      }
    } catch (e) { console.error(e); }
  }

  function updateViewMode() {
    if (isRegistered) {
      regContainer.style.display = 'none';
      mainView.style.display = 'flex';
      if (resetBtn) resetBtn.style.display = 'inline-flex';

      if (messages.length === 0) {
        const activeContext = getPageAwareDetails(pathname, userInfo.name);
        messages = [{
          role: 'ai',
          content: activeContext.greeting,
          timestamp: new Date().toISOString()
        }];
      }
      renderMessages();
    } else {
      regContainer.style.display = 'flex';
      mainView.style.display = 'none';
      if (resetBtn) resetBtn.style.display = 'none';
    }
  }

  function renderMessages() {
    if (!messagesContainer) return;
    messagesContainer.innerHTML = '';

    messages.forEach((msg, idx) => {
      const wrapper = document.createElement('div');
      wrapper.className = `message-wrapper ${msg.role}`;

      if (msg.role === 'ai') {
        const avatarDiv = document.createElement('div');
        avatarDiv.className = 'message-avatar-wrap';
        avatarDiv.innerHTML = `<img src="assets/images/chatbot-kaira.webp" alt="Kaira" onerror="this.src='assets/images/logo.png';" />`;
        wrapper.appendChild(avatarDiv);
      }

      const contentWrap = document.createElement('div');
      contentWrap.className = 'message-content-wrap';

      if (msg.role === 'ai') {
        const senderSpan = document.createElement('span');
        senderSpan.className = 'message-sender-name';
        senderSpan.textContent = 'Kaira';
        contentWrap.appendChild(senderSpan);
      }

      const msgDiv = document.createElement('div');
      msgDiv.className = `message ${msg.role}`;
      msgDiv.innerHTML = msg.role === 'ai' ? parseMarkdown(msg.content) : `<div style="white-space: pre-line;">${msg.content}</div>`;

      const timeSpan = document.createElement('span');
      timeSpan.className = 'msg-time';
      timeSpan.textContent = formatTime(msg.timestamp);
      msgDiv.appendChild(timeSpan);

      if (msg.role === 'ai' && !msg.isSystem) {
        const copyBtn = document.createElement('div');
        copyBtn.className = 'msg-copy-btn';
        copyBtn.innerHTML = '<i class="far fa-copy"></i>';
        copyBtn.title = 'Copy message';
        copyBtn.onclick = () => {
          navigator.clipboard.writeText(msg.content);
          copyBtn.innerHTML = '<i class="fas fa-check" style="color:#10b981;"></i>';
          setTimeout(() => { copyBtn.innerHTML = '<i class="far fa-copy"></i>'; }, 2000);
        };
        msgDiv.appendChild(copyBtn);
      }

      contentWrap.appendChild(msgDiv);
      wrapper.appendChild(contentWrap);
      messagesContainer.appendChild(wrapper);
    });

    if (isLoading) {
      const typingWrapper = document.createElement('div');
      typingWrapper.className = 'message-wrapper ai';
      typingWrapper.innerHTML = `
        <div class="message-avatar-wrap">
          <img src="assets/images/chatbot-kaira.webp" alt="Kaira" onerror="this.src='assets/images/logo.png';" />
        </div>
        <div class="message-content-wrap">
          <span class="message-sender-name">Kaira</span>
          <div class="message ai typing">
            <div class="typing-dots"><span></span><span></span><span></span></div>
          </div>
        </div>
      `;
      messagesContainer.appendChild(typingWrapper);
    }

    renderSuggestions();
    scrollToBottom();
  }

  function renderSuggestions() {
    if (!suggestionsContainer) return;
    const activeContext = getPageAwareDetails(pathname, userInfo.name);
    const suggestions = activeContext.suggestions;

    if (messages.length <= 2 && suggestions && suggestions.length > 0) {
      suggestionsContainer.style.display = 'flex';
      suggestionsContainer.innerHTML = '';
      suggestions.forEach(s => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'suggestion-chip';
        btn.innerHTML = `<span>${s}</span> <i class="fas fa-arrow-right"></i>`;
        btn.onclick = () => {
          input.value = s;
          handleSend();
        };
        suggestionsContainer.appendChild(btn);
      });
    } else {
      suggestionsContainer.style.display = 'none';
    }
  }

  function scrollToBottom() {
    if (messagesContainer) {
      messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
  }

  function toggleChat() {
    isOpen = !isOpen;
    if (isOpen) {
      windowEl.classList.add('open');
      overlay.classList.add('open');
      fab.classList.add('active');
      updateViewMode();
    } else {
      windowEl.classList.remove('open');
      overlay.classList.remove('open');
      fab.classList.remove('active');
    }
  }

  function resetChat() {
    localStorage.removeItem("digify_chat_history");
    localStorage.removeItem("digify_user_info");
    isRegistered = false;
    userInfo = { name: '', phone: '' };
    messages = [];
    if (schedulerCard) schedulerCard.style.display = 'none';
    updateViewMode();
  }

  // Pre-chat Welcome Screen Submit (Instant Start without form inputs)
  if (regForm) {
    regForm.addEventListener('submit', (e) => {
      e.preventDefault();
      userInfo = { name: '', phone: '' };
      localStorage.setItem("digify_user_info", JSON.stringify(userInfo));
      isRegistered = true;

      const activeContext = getPageAwareDetails(pathname);
      if (messages.length === 0) {
        messages = [{
          role: 'ai',
          content: activeContext.greeting,
          timestamp: new Date().toISOString()
        }];
        localStorage.setItem("digify_chat_history", JSON.stringify(messages));
      }
      updateViewMode();
      if (input) input.focus();
    });
  }

  // 1-Click WhatsApp Sync with Pre-filled Chat Summary to Gautam (+91 7425016636)
  function handleWhatsAppSync() {
    const userMsgs = messages.filter((m) => m.role === "user");
    let summaryText = "";

    if (userMsgs.length > 0) {
      let rawQuery = userMsgs[userMsgs.length - 1].content || "";
      if (rawQuery.toLowerCase().includes("chittor")) {
        rawQuery = "Digify ERP & Smart POS Solutions";
      }
      summaryText = `Namaste Gautam Sir! I am interested in taking services from Digify Soft Solutions.\n\n• My Query: "${rawQuery.slice(0, 160)}"\n\nCould you please explain to me more details about your software?`;
    } else {
      summaryText = "Namaste Gautam Sir! I am interested in taking services from Digify Soft Solutions. Could you please explain to me more details about your software?";
    }

    if (userInfo.name && userInfo.name.trim() && userInfo.name.toLowerCase() !== 'visitor') {
      summaryText += `\n• Name: ${userInfo.name.trim()}`;
    }
    if (userInfo.phone && userInfo.phone.trim()) {
      summaryText += `\n• Phone: ${userInfo.phone.trim()}`;
    }

    window.open(`https://wa.me/917425016636?text=${encodeURIComponent(summaryText)}`, "_blank");
  }

  // Embedded Scheduler Setup
  let selectedDateIso = new Date().toISOString().split('T')[0];
  let selectedTimeSlot = "11:00 AM - 12:00 PM";

  const TIME_SLOTS = [
    { value: "11:00 AM - 12:00 PM", label: "11:00 AM", period: "Morning", icon: "fa-sun" },
    { value: "02:00 PM - 03:00 PM", label: "02:00 PM", period: "Afternoon", icon: "fa-cloud-sun" },
    { value: "04:00 PM - 05:00 PM", label: "04:00 PM", period: "Evening", icon: "fa-coffee" },
    { value: "06:30 PM - 07:30 PM", label: "06:30 PM", period: "Late Eve", icon: "fa-moon" }
  ];

  function renderSchedulerSlots() {
    if (!slotGridContainer) return;
    slotGridContainer.innerHTML = '';
    TIME_SLOTS.forEach(slot => {
      const isSelected = selectedTimeSlot === slot.value;
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = `slot-chip ${isSelected ? 'active' : ''}`;
      btn.innerHTML = `
        <i class="fas ${slot.icon} slot-icon"></i>
        <div class="slot-info">
          <span class="slot-time">${slot.label}</span>
          <span class="slot-period">${slot.period}</span>
        </div>
        ${isSelected ? '<i class="fas fa-check-circle slot-check"></i>' : ''}
      `;
      btn.onclick = () => {
        selectedTimeSlot = slot.value;
        renderSchedulerSlots();
      };
      slotGridContainer.appendChild(btn);
    });
  }

  function renderDateChips() {
    if (!dateChipsContainer) return;
    dateChipsContainer.innerHTML = '';
    const today = new Date();

    for (let i = 0; i < 4; i++) {
      const d = new Date();
      d.setDate(today.getDate() + i);
      const iso = d.toISOString().split('T')[0];
      const dayName = i === 0 ? "Today" : i === 1 ? "Tomorrow" : d.toLocaleDateString("en-IN", { weekday: "short" });
      const dateStr = d.toLocaleDateString("en-IN", { day: "numeric", month: "short" });

      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = `date-chip ${selectedDateIso === iso ? 'active' : ''}`;
      btn.innerHTML = `<span class="chip-day">${dayName}</span><span class="chip-date">${dateStr}</span>`;
      btn.onclick = () => {
        selectedDateIso = iso;
        if (schedulerDateInput) schedulerDateInput.value = iso;
        updateSelectedTag();
        renderDateChips();
      };
      dateChipsContainer.appendChild(btn);
    }
  }

  function updateSelectedTag() {
    if (selectedTagText && selectedDateIso) {
      const d = new Date(selectedDateIso + "T00:00:00");
      selectedTagText.textContent = d.toLocaleDateString("en-IN", { weekday: 'short', day: 'numeric', month: 'short' });
    }
  }

  if (schedulerDateInput) {
    schedulerDateInput.value = selectedDateIso;
    updateSelectedTag();
    schedulerDateInput.addEventListener('change', (e) => {
      selectedDateIso = e.target.value;
      updateSelectedTag();
      renderDateChips();
    });
  }

  renderDateChips();
  renderSchedulerSlots();

  if (scheduleBtn) {
    scheduleBtn.addEventListener('click', () => {
      const isVisible = schedulerCard.style.display === 'flex';
      schedulerCard.style.display = isVisible ? 'none' : 'flex';
      scheduleBtn.classList.toggle('active', !isVisible);
    });
  }

  if (schedulerCloseBtn) {
    schedulerCloseBtn.addEventListener('click', () => {
      schedulerCard.style.display = 'none';
      if (scheduleBtn) scheduleBtn.classList.remove('active');
    });
  }

  if (whatsappBtn) {
    whatsappBtn.addEventListener('click', handleWhatsAppSync);
  }

  if (schedulerForm) {
    schedulerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const service = schedulerService.value;
      const notes = schedulerNotes.value.trim() || 'None';
      const phone = userInfo.phone || '+91 7425016636';
      const name = userInfo.name || 'Valued Client';

      schedulerCard.style.display = 'none';
      if (scheduleBtn) scheduleBtn.classList.remove('active');

      // Send Lead to send_chatbot_lead.php (SMTP + DB)
      fetch('send_chatbot_lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          name: name,
          phone: phone,
          source: 'Digify AI Strategy Call Scheduler',
          service: service,
          date: selectedDateIso,
          slot: selectedTimeSlot,
          notes: notes
        })
      }).catch(err => console.error('Chatbot schedule email error:', err));

      // Direct instant WhatsApp Notification to Gautam (+91 7425016636)
      const waNotifyText = `Namaste Gautam Sir!\n\nNew Strategy Call Booking on Digify Soft Solutions Website:\n\n- Name: ${name}\n- Phone: ${phone}\n- Service: ${service}\n- Date: ${selectedDateIso}\n- Time Slot: ${selectedTimeSlot}\n- Notes: ${notes}\n\nPlease confirm this strategy call booking.`;
      setTimeout(() => {
        window.open(`https://wa.me/917425016636?text=${encodeURIComponent(waNotifyText)}`, "_blank");
      }, 400);

      const confMsg = {
        role: "ai",
        content: `🎉 **Strategy Call Request Received!**\n\n- **Service:** ${service}\n- **Date:** ${selectedDateIso}\n- **Time Slot:** ${selectedTimeSlot}\n- **Notes:** ${notes}\n\nThank you **${name}**! Gautam and our solution engineering team have received your request. We will connect with you on **${phone}**.\n\nYou can also connect instantly on WhatsApp with **Gautam**: [ACTION:WHATSAPP]`,
        timestamp: new Date().toISOString()
      };

      messages.push(confMsg);
      localStorage.setItem("digify_chat_history", JSON.stringify(messages));
      renderMessages();
    });
  }

  // Handle Chat Input & Sending
  async function handleSend() {
    const text = input.value.trim();
    if (!text || isLoading) return;

    messages.push({ role: 'user', content: text, timestamp: new Date().toISOString() });
    input.value = '';
    renderMessages();
    localStorage.setItem("digify_chat_history", JSON.stringify(messages));

    isLoading = true;
    if (sendBtn) sendBtn.disabled = true;
    renderMessages();

    try {
      const apiMessages = messages.map(m => ({
        role: m.role === 'ai' ? 'assistant' : 'user',
        content: m.content
      }));

      const response = await fetch("chat_api.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ messages: apiMessages })
      });

      if (!response.ok) throw new Error("API Error");
      const data = await response.json();
      messages.push({ role: 'ai', content: data.response, timestamp: new Date().toISOString() });
    } catch (e) {
      console.error(e);
      messages.push({
        role: 'ai',
        content: "Sorry, I am facing some network issues right now. Please call us at +91 7425016636 for assistance.",
        timestamp: new Date().toISOString()
      });
    } finally {
      isLoading = false;
      if (sendBtn) sendBtn.disabled = false;
      localStorage.setItem("digify_chat_history", JSON.stringify(messages));
      renderMessages();
    }
  }

  // Event Listeners
  if (fab) fab.addEventListener('click', toggleChat);
  if (closeBtn) closeBtn.addEventListener('click', toggleChat);
  if (overlay) overlay.addEventListener('click', toggleChat);
  if (resetBtn) resetBtn.addEventListener('click', resetChat);

  if (sendBtn) sendBtn.addEventListener('click', handleSend);
  if (input) {
    input.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') handleSend();
    });
  }
}
