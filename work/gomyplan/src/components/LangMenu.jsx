import { useState } from "react";
import styled from "styled-components";

// img
import LangKR from "../assets/img/iconLangKR.png";
import LangEN from "../assets/img/iconLangEN.png";
import LangCHT from "../assets/img/iconLangCHT.png";
import LangCHS from "../assets/img/iconLangCHS.png";

// style
const LangMenuContainer = styled.div`
  flex:1;
  display: flex;
  flex-direction: column;
  gap: 40px;
  padding: 0 20px;
`;

const LangBox = styled.div`
  display: flex;
  flex-direction: column;
`;

const LangTitle = styled.div`
  padding: 12px 10px;
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  color: var(--color-white);
`;

const LangList = styled.div`
  display: flex;
  flex-direction: column;
  border-radius: 12px;
  padding: 8px 12px;
  width: 100%;
  box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
  background: var(--color-bg2);
  transition: var(--transition);

  .darkMode & {
   box-shadow: none;
    background: var(--color-black);
  }
`;

const LangItem = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1px solid var(--color-border);
  padding: 10px;
  width: 100%;

  &:last-child {
    border-bottom: 0;
  }

  img {
    width: 20px;
  }

  span {
    flex: 1;
    font-family: var(--lang-all);
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-darkgray);
    transition: var(--transition);
  }

  &.active span {
    color: var(--color-main);
  }

  .darkMode & span {
    color: var(--color-gray);
  }

  .darkMode &.active span {
    color: var(--color-main);
  }
`;

const LangMenu = () => {
  const [activeLang, setActiveLang] = useState("EN");

  const handleLangClick = (lang) => {
    setActiveLang(lang);
  };

  return (
    <LangMenuContainer>
      <LangBox>
        <LangTitle>Language</LangTitle>
        <LangList>
          <LangItem className={activeLang === "KR" ? "active" : ""} onClick={() => handleLangClick("KR")}>
            <img src={LangKR} alt="Korean" />
            <span>Korean 한국어</span>
          </LangItem>
          <LangItem className={activeLang === "EN" ? "active" : ""} onClick={() => handleLangClick("EN")}>
            <img src={LangEN} alt="English" />
            <span>English (US)</span>
          </LangItem>
          <LangItem className={activeLang === "CHT" ? "active" : ""} onClick={() => handleLangClick("CHT")}>
            <img src={LangCHT} alt="Chinese (Traditional)" />
            <span>Chinese (Traditional) 中語</span>
          </LangItem>
          <LangItem className={activeLang === "CHS" ? "active" : ""} onClick={() => handleLangClick("CHS")}>
            <img src={LangCHS} alt="Chinese (Simplified)" />
            <span>Chinese (Simplified) 中文</span>
          </LangItem>
        </LangList>
      </LangBox>
      <LangBox>
        <LangTitle>Currency</LangTitle>
        <LangList>
          <LangItem className={activeLang === "KR" ? "active" : ""} onClick={() => handleLangClick("KR")}>
            <span>KRW (₩)</span>
          </LangItem>
          <LangItem className={activeLang === "EN" ? "active" : ""} onClick={() => handleLangClick("EN")}>
            <span>USD ($)</span>
          </LangItem>
          <LangItem className={activeLang === "CHT" ? "active" : ""} onClick={() => handleLangClick("CHT")}>
            <span>HKD ($)</span>
          </LangItem>
          <LangItem className={activeLang === "CHS" ? "active" : ""} onClick={() => handleLangClick("CHS")}>
            <span>RMB (¥)</span>
          </LangItem>
        </LangList>
      </LangBox>
    </LangMenuContainer>
  );
};

export default LangMenu;
