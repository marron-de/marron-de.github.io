import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Form from "react-bootstrap/Form";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import BigButton from "../components/BigButton";

// img
import Photo1 from "../assets/img/Photo1.jpg";
import Photo2 from "../assets/img/Photo2.jpg";
import Photo3 from "../assets/img/Photo3.jpg";
import Photo4 from "../assets/img/Photo4.jpg";
import Photo5 from "../assets/img/Photo5.jpg";
import Photo6 from "../assets/img/Photo6.jpg";
import Photo7 from "../assets/img/Photo7.jpg";
import Photo8 from "../assets/img/Photo8.jpg";

// style
const PhotoList = styled.div`
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
`;

const PhotoItem = styled.div`
  position: relative;
  display: flex;
  box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
  background: var(--color-white);
  border: 3px solid var(--color-input);
  border-radius: 10px;
  width: calc((100% - 14px) / 2);
  height: 140px;
  overflow: hidden;
  transition: var(--transition);

  & > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .form-check.check_ver {
    position: absolute;
    left: 10px;
    top: 10px;
    z-index: 10;
  }

  .form-check.check_ver .form-check-input {
    width: 27px;
    background: var(--color-gray);
    border: 2px solid #afafaf;
  }

  .form-check.check_ver .form-check-input::before {
    background-image: url(/src/assets/img/icon_check2.png);
    width: 10px;
  }

  .form-check.check_ver .form-check-input:checked {
    background: var(--color-main);
    border: 2px solid #b6d8ff;
  }

  .form-check.check_ver .form-check-input:checked::before {
    background-image: url(/src/assets/img/icon_check_on.png);
  }

  .form-check.check_ver .form-check-label {
    display: none;
  }

  .darkMode & {
    border: 3px solid var(--color-darkgray);
  }
`;

const SelectPlanPhoto = () => {

  const [selectedCount, setSelectedCount] = useState(0);

  const handleCheckboxChange = (event) => {
    if (event.target.checked) {
      setSelectedCount(selectedCount + 1);
    } else {
      setSelectedCount(selectedCount - 1);
    }
  };

  return (
    <>
      {/* Header */}
      <Header type="search" placeholder="Activity search..." value="Mong Kok" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <PhotoList>
            <PhotoItem>
              <img src={Photo1} />
              <Form.Check type="checkbox" name="Photo1" id="Photo1" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo2} />
              <Form.Check type="checkbox" name="Photo2" id="Photo2" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo3} />
              <Form.Check type="checkbox" name="Photo3" id="Photo3" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo4} />
              <Form.Check type="checkbox" name="Photo4" id="Photo4" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo5} />
              <Form.Check type="checkbox" name="Photo5" id="Photo5" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo6} />
              <Form.Check type="checkbox" name="Photo6" id="Photo6" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo7} />
              <Form.Check type="checkbox" name="Photo7" id="Photo7" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
            <PhotoItem>
              <img src={Photo8} />
              <Form.Check type="checkbox" name="Photo8" id="Photo8" label="" className="check_ver" onChange={handleCheckboxChange}/>
            </PhotoItem>
          </PhotoList>
        </PageContent>
        <PageBtnbox className="fixed">
          <BigButton>Selected ({selectedCount})</BigButton>
          <BigButton className="ver2">Take Picture</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default SelectPlanPhoto;
